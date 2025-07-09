<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VisionAIProcessor;

class DeteksiController extends Controller
{
    public function simpan(Request $request)
    {
        // Validasi minimal
        $validated = $request->validate([
            'food' => 'required|string',
            'kalori' => 'nullable|numeric',
            'protein' => 'nullable|numeric',
            'lemak' => 'nullable|numeric',
            'karbohidrat' => 'nullable|numeric',
            'input_gambar' => 'required|string', // path base64 atau nama file
        ]);

        // Simpan ke database
        $data = new VisionAIProcessor();
        $data->id_pengguna = Auth::id(); // asumsi user login
        $data->deteksi_makanan = $request->food;
        $data->kalori = $request->kalori;
        $data->protein = $request->protein;
        $data->lemak = $request->lemak;
        $data->karbohidrat = $request->karbohidrat;
        $data->input_gambar = $request->input_gambar; // kamu bisa ganti jadi path file sesungguhnya
        $data->save();

        return response()->json(['message' => 'Data berhasil disimpan.'], 200);
    }
}
