from fastapi import FastAPI, UploadFile, File
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import JSONResponse
from PIL import Image, UnidentifiedImageError
from pydantic import BaseModel
from ultralytics import YOLO

import pandas as pd
import difflib
import os
import io

# ==== Konfigurasi ====
DEBUG = True
CONFIDENCE_THRESHOLD = 0.25  # diturunkan agar lebih banyak deteksi

# ==== Setup FastAPI ====
app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=[
        "http://127.0.0.1:8000",
        "http://localhost:8000"
    ],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# ==== Path Absolut ====
BASE_DIR = os.path.dirname(__file__)
MODEL_PATH = os.path.join(BASE_DIR, "best.pt")
CSV_PATH = os.path.join(BASE_DIR, "food_nutrition_dataset_full.csv")

# ==== Load Model YOLO ====
try:
    if not os.path.exists(MODEL_PATH):
        raise FileNotFoundError(f"Model tidak ditemukan: {MODEL_PATH}")
    model = YOLO(MODEL_PATH)
    print("✅ Label terdeteksi oleh model:", model.names)
except Exception as e:
    raise RuntimeError(f"Gagal load model YOLO: {e}")

# ==== Load Dataset Nutrisi ====
if not os.path.exists(CSV_PATH):
    raise FileNotFoundError("Dataset nutrisi tidak ditemukan.")

nutrition_df = pd.read_csv(CSV_PATH)

# Normalisasi nama kolom
nutrition_df.rename(columns={
    "Food Name": "Food",
    "Kalori (kkal)": "Kalori",
    "Kalori (kcal)": "Kalori",
    "Protein (g)": "Protein",
    "Lemak (g)": "Lemak",
    "Karbohidrat (g)": "Karbohidrat",
    "Serat (g)": "Serat"
}, inplace=True)

for col in ["Kalori", "Protein", "Lemak", "Karbohidrat", "Serat"]:
    nutrition_df[col] = pd.to_numeric(nutrition_df[col], errors='coerce')

required_columns = {"Food", "Kalori", "Protein", "Lemak", "Karbohidrat", "Serat"}
if not required_columns.issubset(nutrition_df.columns):
    raise ValueError("CSV file is missing one or more required columns.")

# ==== Fungsi bantu ====
def find_best_match(label, food_list):
    matches = difflib.get_close_matches(label.lower().strip(), [f.lower().strip() for f in food_list], n=1, cutoff=0.6)
    return matches[0] if matches else None

# ==== Endpoint ====
@app.get("/")
async def root():
    return {"message": "Welcome to the Food Detection API!"}

@app.post("/predict")
async def detect_food(file: UploadFile = File(...)):
    try:
        if file.content_type not in ["image/jpeg", "image/png", "image/jpg", "image/webp"]:
            return JSONResponse(status_code=400, content={"error": "Only JPEG, PNG, and WEBP images are supported."})


        image_bytes = await file.read()

        try:
            image = Image.open(io.BytesIO(image_bytes)).convert("RGB")
        except UnidentifiedImageError:
            return JSONResponse(status_code=400, content={"error": "Uploaded file is not a valid image."})

        results = model.predict(image, conf=CONFIDENCE_THRESHOLD)
        boxes = results[0].boxes

        if boxes is None or boxes.cls is None:
            return {"results": [], "message": "No food detected in the image."}

        prediction = []
        classes = boxes.cls.tolist()
        confidences = boxes.conf.tolist()
        xyxy = boxes.xyxy.tolist()

        areas = [(box[2] - box[0]) * (box[3] - box[1]) for box in xyxy]
        max_area = max(areas) if areas else 1

        food_choices = nutrition_df['Food'].tolist()

        for i, cls in enumerate(classes):
            label = model.names[int(cls)].strip()
            confidence = float(confidences[i]) * 100
            area = areas[i]
            porsi = round(area / max_area, 2)

            best_match = find_best_match(label, food_choices)
            if not best_match:
                if DEBUG:
                    print(f"❌ Tidak ditemukan match untuk: {label}")
                continue

            if DEBUG:
                print(f"[{i}] ✅ {label} cocok dengan: {best_match}, conf: {confidence:.2f}, porsi: {porsi}")

            matched = nutrition_df[nutrition_df['Food'].str.lower().str.strip() == best_match.lower().strip()]
            if not matched.empty:
                row = matched.iloc[0]
                prediction.append({
                    "food": label,
                    "matched_food": row["Food"],
                    "kalori": float(row["Kalori"]) if pd.notna(row["Kalori"]) else None,
                    "protein": float(row["Protein"]) if pd.notna(row["Protein"]) else None,
                    "lemak": float(row["Lemak"]) if pd.notna(row["Lemak"]) else None,
                    "karbohidrat": float(row["Karbohidrat"]) if pd.notna(row["Karbohidrat"]) else None,
                    "serat": float(row["Serat"]) if pd.notna(row["Serat"]) else None,
                    "akurasi": round(confidence, 2),
                    "porsi": porsi
                })

        return {"results": prediction}

    except Exception as e:
        return JSONResponse(status_code=500, content={"error": str(e)})
