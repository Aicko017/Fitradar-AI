<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\VisionAIProcessor;

class VisionAIController extends Controller
{
    /**
     * Menyimpan hasil deteksi makanan dari FastAPI ke database dan storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function simpanHasilDeteksi(Request $request)
    {
        try {
            // Validasi input dari JavaScript
            $validated = $request->validate([
                'deteksi_makanan' => 'required|string',
                'kalori' => 'nullable|numeric',
                'protein' => 'nullable|numeric',
                'lemak' => 'nullable|numeric',
                'karbohidrat' => 'nullable|numeric',
                'serat' => 'nullable|numeric',
                'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:4096', // ✅ mendukung .webp
            ]);

            // Cek apakah user sudah login
            if (!Auth::check()) {
                return response()->json([
                    'success' => false,
                    'message' => 'User belum login'
                ], 401);
            }

            // Simpan file gambar ke storage
            $imageFile = $request->file('image');
            $imagePath = $imageFile->store('public/deteksi_gambar');
            $imageName = basename($imagePath);

            // Simpan data deteksi ke database
            $data = VisionAIProcessor::create([
                'id_pengguna' => Auth::id(),
                'input_gambar' => $imageName,
                'deteksi_makanan' => $validated['deteksi_makanan'],
                'kalori' => $validated['kalori'] ?? 0,
                'protein' => $validated['protein'] ?? 0,
                'lemak' => $validated['lemak'] ?? 0,
                'karbohidrat' => $validated['karbohidrat'] ?? 0,
                'serat' => $validated['serat'] ?? 0,
            ]);

            return response()->json([
                'success' => true,
                'message' => '✅ Hasil deteksi berhasil disimpan!',
                'data' => $data
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal!',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('❌ Gagal simpan deteksi: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}
