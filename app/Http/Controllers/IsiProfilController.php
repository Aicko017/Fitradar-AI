<?php

namespace App\Http\Controllers;

use App\Models\HealthData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsiProfilController extends Controller
{
    public function index()
    {
        // Ambil data kesehatan pengguna jika ada
        $healthData = Auth::user()->healthData()->first();
        return view('halaman-profil', compact('healthData'));
    }

    public function update(Request $request)
    {
        // Validasi hanya nama yang wajib diisi
        $validated = $request->validate([
            'name'   => 'required|string|max:255',
            'day'    => 'nullable|integer|min:1|max:31',
            'month'  => 'nullable|integer|min:1|max:12',
            'year'   => 'nullable|integer|min:1950|max:' . date('Y'),
            'height' => 'nullable|numeric|min:0',
            'weight' => 'nullable|numeric|min:0',
        ]);

        // Simpan perubahan nama ke tabel users
        $user = Auth::user();
        $user->name = $validated['name'];
        $user->save();

        // Opsional: Tetap simpan data tambahan jika tersedia
        $day    = $validated['day'] ?? null;
        $month  = $validated['month'] ?? null;
        $year   = $validated['year'] ?? null;
        $height = $validated['height'] ?? null;
        $weight = $validated['weight'] ?? null;

        $birthdate = ($day && $month && $year)
            ? sprintf('%04d-%02d-%02d', $year, $month, $day)
            : null;

        // Simpan data ke tabel health_data jika ada input
        if ($birthdate || $height || $weight) {
            $health = $user->healthData()->firstOrNew(['user_id' => $user->id]);
            $health->birthdate = $birthdate;
            $health->height    = $height;
            $health->weight    = $weight;

            if ($height && $weight) {
                $health->bmi = round($weight / (($height / 100) ** 2), 2);
            }

            $health->save();
        }

        return redirect()->route('halaman-profil')
                         ->with('success', 'Nama berhasil diperbarui. Data lain tetap ditampilkan tetapi tidak wajib diubah.');
    }
}
