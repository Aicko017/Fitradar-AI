<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TingkatAktivitasController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'tingkat_aktivitas' => 'required|in:pemula,menengah,berpengalaman',
    ]);

    // Simpan data ke session atau database sesuai kebutuhan
    session(['tingkat_aktivitas' => $request->tingkat_aktivitas]);

    // Redirect ke halaman tingkat waktu
    return redirect()->route('tingkat-waktu');
}

}
