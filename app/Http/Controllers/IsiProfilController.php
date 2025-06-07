<?php

namespace App\Http\Controllers;

use App\Models\HealthData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function view;
use function redirect;

class IsiProfilController extends Controller
{
    public function index()
    {
        $healthData = HealthData::where('user_id', Auth::id())->first();
    return view('halaman-profil', [
        'user' => Auth::user(),
        'healthData' => $healthData
    ]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'day' => 'required|numeric|min:1|max:31',
            'month' => 'required|numeric|min:1|max:12',
            'year' => 'required|numeric|min:1900|max:' . date('Y'),
            'activity_level' => 'required|string|in:low,moderate,high',
        ]);

        // Mendapatkan nilai height dan weight dari request jika ada
        $height = $request->input('height');
        $weight = $request->input('weight');
        
        // Menghitung BMI jika height dan weight tersedia
        $bmi = null;
        if ($height && $weight) {
            $heightInMeters = $height / 100;
            $bmi = $weight / ($heightInMeters * $heightInMeters);
        }

        // Format tanggal lahir
        $birthdate = $validated['year'] . '-' . str_pad($validated['month'], 2, '0', STR_PAD_LEFT) . '-' . str_pad($validated['day'], 2, '0', STR_PAD_LEFT);

        // Cek apakah pengguna sudah memiliki data kesehatan
        $healthData = HealthData::where('user_id', Auth::id())->first();

        if ($healthData) {
            // Update data yang sudah ada
            $healthData->update([
                'name' => $validated['name'],
                'gender' => $validated['gender'],
                'birthdate' => $birthdate,
                'height' => $height,
                'weight' => $weight,
                'bmi' => $bmi,
                'activity_level' => $validated['activity_level'],
            ]);
        } else {
            // Buat data baru
            HealthData::create([
                'user_id' => Auth::id(),
                'name' => $validated['name'],
                'gender' => $validated['gender'],
                'birthdate' => $birthdate,
                'height' => $height,
                'weight' => $weight,
                'bmi' => $bmi,
                'activity_level' => $validated['activity_level'],
            ]);
        }

        // Redirect ke halaman selanjutnya
        return redirect()->route('halaman-selanjutnya');
    }

        public function showProfile()
    {
        $user = Auth::user();
        $healthData = HealthData::where('user_id', $user->id)->first();

        return view('halaman-profil', compact('user', 'healthData'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'day' => 'required|numeric|min:1|max:31',
            'month' => 'required|numeric|min:1|max:12',
            'year' => 'required|numeric|min:1900|max:' . date('Y'),
            'height' => 'nullable|numeric|min:50|max:300',
            'weight' => 'nullable|numeric|min:10|max:500',
            'activity_level' => 'required|in:low,moderate,high',
        ]);

        $user = Auth::user();

        $birthdate = $request->year . '-' . str_pad($request->month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($request->day, 2, '0', STR_PAD_LEFT);

        $height = $request->height;
        $weight = $request->weight;

        $bmi = null;
        if ($height && $weight) {
            $heightInMeters = $height / 100;
            $bmi = $weight / ($heightInMeters * $heightInMeters);
        }

        HealthData::updateOrCreate(
            ['user_id' => $user->id],
            [
                'name' => $request->name,
                'gender' => $request->gender,
                'birthdate' => $birthdate,
                'height' => $height,
                'weight' => $weight,
                'bmi' => $bmi,
                'activity_level' => $request->activity_level,
            ]
        );

        return redirect()->route('halaman-selanjutnya');
    }

}