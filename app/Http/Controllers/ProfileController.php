<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\HealthData;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            // tambahkan field lain jika diperlukan
        ]);

        $user = Auth::user();
        $user->update($data); // pastikan kolom 'name' ada di $fillable model User

        return back()->with('status', 'profile-updated');
    }

    public function destroy(Request $request)
    {
        $user = Auth::user();
        Auth::logout();
        $user->delete();

        return redirect('/')->with('status', 'Akun berhasil dihapus.');
    }

    public function next()
    {
        return redirect()->route('halaman-selanjutnya');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'gender' => 'nullable|in:male,female',
        'day' => 'required|integer|min:1|max:31',
        'month' => 'required|integer|min:1|max:12',
        'year' => 'required|integer|min:1900|max:' . date('Y'),
        'height' => 'required|numeric|min:0',
        'weight' => 'required|numeric|min:0',
    ]);

    // Simpan nama ke model User
    $user = Auth::user();
    $user->update([
        'name' => $request->name,
    ]);

    // Refresh data user di sesi auth agar nama langsung berubah
    Auth::setUser($user->fresh());

    // Simpan ke tabel HealthData
    $bmi = 0;
    if ($request->height > 0) {
        $bmi = $request->weight / pow(($request->height / 100), 2);
    }

    HealthData::updateOrCreate(
        ['user_id' => $user->id],
        [
            'gender' => $request->gender,
            'birthdate' => "{$request->year}-{$request->month}-{$request->day}",
            'height' => $request->height,
            'weight' => $request->weight,
            'bmi' => $bmi,
        ]
    );

    return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
}

}
