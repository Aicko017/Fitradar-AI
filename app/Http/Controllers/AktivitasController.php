<?php
// app/Http/Controllers/AktivitasController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function simpanWaktu(Request $request)
    {
        $request->validate([
            'durasi' => 'required|in:20,30,60',
        ]);

        // Simpan durasi ke session
        session(['durasi_latihan' => $request->durasi]);

        // Redirect ke halaman preferensi makan
        return redirect()->route('halaman-preferensi-makan')
                         ->with('success', 'Waktu latihan berhasil disimpan!');
    }

    public function store(Request $request)
{
    $aktivitas = $request->input('waktu');
    // proses atau redirect ke halaman berikut
    return redirect('/halaman-selanjutnya')->with('aktivitas', $aktivitas);
}

}
