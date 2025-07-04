document.addEventListener('DOMContentLoaded', function () {
    const video = document.getElementById('cameraPreview');
    const canvas = document.getElementById('cameraCanvas');
    const resultContainer = document.getElementById('resultContainer');
    const capturedImage = document.getElementById('capturedImage');

    const foodName = document.getElementById('foodName');
    const calories = document.getElementById('calories');
    const protein = document.getElementById('protein');
    const fat = document.getElementById('fat');
    const carbs = document.getElementById('carbs');
    const fiber = document.getElementById('fiber');
    const servingSize = document.getElementById('servingSize');
    const accuracy = document.getElementById('accuracy');

    const imageUpload = document.getElementById('imageUpload');
    const captureButton = document.getElementById('captureButton');

    let stream = null;
    let isSending = false;

    if (video && navigator.mediaDevices?.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(localStream => {
                stream = localStream;
                video.srcObject = stream;
                video.play().catch(err => console.error("Gagal memulai video:", err));
            })
            .catch(error => {
                console.error("Gagal mengakses kamera:", error);
                alert("Kamera tidak bisa digunakan: " + error.message);
            });
    }

    if (captureButton && !captureButton.dataset.listenerAdded) {
        captureButton.dataset.listenerAdded = 'true';
        captureButton.addEventListener('click', function () {
            if (video.readyState >= 2) {
                const context = canvas.getContext('2d');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                const base64Image = canvas.toDataURL('image/jpeg');
                displayAndSendImage(base64Image);
            } else {
                alert("Kamera belum siap.");
            }
        });
    }

    if (imageUpload && !imageUpload.dataset.listenerAdded) {
        imageUpload.dataset.listenerAdded = 'true';
        imageUpload.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const base64Image = e.target.result;
                    displayAndSendImage(base64Image);
                };
                reader.readAsDataURL(file);
            }
        });
    }

    function base64ToBlob(base64) {
        const [prefix, data] = base64.split(',');
        const mime = prefix.match(/:(.*?);/)[1];
        const byteString = atob(data);
        const byteArray = new Uint8Array(byteString.length);
        for (let i = 0; i < byteString.length; i++) {
            byteArray[i] = byteString.charCodeAt(i);
        }
        return new Blob([byteArray], { type: mime });
    }

    function displayAndSendImage(base64Image) {
        if (isSending) return;
        isSending = true;

        capturedImage.src = base64Image;
        resultContainer.classList.remove('hidden');

        foodName.textContent = 'Mendeteksi makanan...';
        calories.textContent = protein.textContent = fat.textContent = carbs.textContent = fiber.textContent = servingSize.textContent = accuracy.textContent = 'Loading...';

        const blob = base64ToBlob(base64Image);

        const mimeType = blob.type;
        let extension = 'jpg';
        if (mimeType === 'image/png') extension = 'png';
        else if (mimeType === 'image/webp') extension = 'webp';
        else if (mimeType === 'image/jpeg') extension = 'jpg';

        const formData = new FormData();
        formData.append('file', blob, `image.${extension}`);

        fetch('http://127.0.0.1:8001/predict', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) throw new Error(`FastAPI Error: ${response.status}`);
            return response.json();
        })
        .then(data => {
            console.log('📡 FastAPI Response:', data);

            if (data.results && data.results.length > 0) {
                const result = data.results[0];
                const getNumber = (val) => isNaN(parseFloat(val)) ? 0 : parseFloat(val);

                foodName.textContent = result.food ?? 'Tidak diketahui';
                calories.textContent = getNumber(result.kalori);
                protein.textContent = getNumber(result.protein);
                fat.textContent = getNumber(result.lemak);
                carbs.textContent = getNumber(result.karbohidrat);
                fiber.textContent = getNumber(result.serat);
                servingSize.textContent = result.porsi ?? '-';
                accuracy.textContent = result.akurasi ? `${parseFloat(result.akurasi).toFixed(2)}%` : '-';

                if (result.food && result.food !== 'Tidak diketahui') {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]');
                    if (!csrfToken) {
                        alert('❌ CSRF token tidak ditemukan!');
                        isSending = false;
                        return;
                    }

                    const simpanForm = new FormData();
                    simpanForm.append('image', blob, `deteksi.${extension}`);
                    simpanForm.append('deteksi_makanan', result.food);
                    simpanForm.append('kalori', getNumber(result.kalori));
                    simpanForm.append('protein', getNumber(result.protein));
                    simpanForm.append('lemak', getNumber(result.lemak));
                    simpanForm.append('karbohidrat', getNumber(result.karbohidrat));
                    simpanForm.append('serat', getNumber(result.serat));

                    fetch('/simpan-hasil-deteksi', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken.getAttribute('content')
                        },
                        body: simpanForm
                    })
                    .then(res => res.json())
                    .then(res => {
                        isSending = false;
                        if (res.success) {
                            alert('✅ Hasil deteksi berhasil disimpan!');
                        } else {
                            alert('❌ Gagal simpan: ' + res.message);
                        }
                    })
                    .catch(err => {
                        isSending = false;
                        console.error('❌ Gagal kirim ke Laravel:', err);
                        alert('Gagal menyimpan hasil deteksi: ' + err.message);
                    });
                } else {
                    isSending = false;
                    console.log('⚠️ Tidak ada makanan valid untuk disimpan.');
                }
            } else {
                isSending = false;
                foodName.textContent = 'Tidak ada makanan terdeteksi';
                calories.textContent = protein.textContent = fat.textContent = carbs.textContent = fiber.textContent = servingSize.textContent = accuracy.textContent = '-';
            }
        })
        .catch(error => {
            isSending = false;
            console.error('❌ Error dari FastAPI:', error);
            alert('Gagal deteksi makanan: ' + error.message);
            foodName.textContent = 'Error deteksi';
            calories.textContent = protein.textContent = fat.textContent = carbs.textContent = fiber.textContent = servingSize.textContent = accuracy.textContent = '-';
        });
    }

    function stopCamera() {
        if (stream) {
            stream.getTracks().forEach(track => track.stop());
            video.srcObject = null;
        }
    }

    window.addEventListener('beforeunload', stopCamera);
    window.addEventListener('pagehide', stopCamera);
});
