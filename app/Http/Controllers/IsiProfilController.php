<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsiProfilController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'day' => 'required|digits:2',
            'month' => 'required|digits:2',
            'year' => 'required|digits:4',
            'height' => 'required|integer',
            'weight' => 'required|integer',
        ]);

        // Proses data (misalnya menyimpan ke database atau apa pun yang diperlukan)

        // Redirect atau tampilkan halaman berikutnya
        return redirect()->route('isi-profil');
    }
}
