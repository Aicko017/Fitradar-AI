<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IsiProfilController;
use App\Http\Controllers\TingkatAktivitasController;
use App\Http\Controllers\AktivitasController;

// -----------------------------
// ✅ Halaman Awal & Dashboard
// -----------------------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// -----------------------------
// ✅ Halaman Dashboard (Route Baru)
// -----------------------------
Route::get('/halaman-dashboard', function () {
    return view('halaman-dashboard');
})->middleware(['auth', 'verified'])->name('halaman-dashboard');

// -----------------------------
// ✅ Isi Profil
// -----------------------------
Route::get('/isi-profil', [IsiProfilController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('isi-profil');

Route::post('/isi-profil', [IsiProfilController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('simpan-profil');

// -----------------------------
// ✅ Halaman Tingkat Aktivitas Fisik
// -----------------------------
Route::get('/halaman-selanjutnya', function () {
    return view('halaman-selanjutnya');
})->middleware(['auth', 'verified'])->name('halaman-selanjutnya');

// -----------------------------
// ✅ Halaman Pilih Waktu Olahraga
// -----------------------------
Route::get('/tingkat-waktu', function () {
    return view('tingkat-waktu');
})->middleware(['auth', 'verified'])->name('tingkat-waktu');

Route::post('/simpan-waktu-olahraga', [AktivitasController::class, 'simpanWaktu'])
    ->middleware(['auth', 'verified'])->name('simpan-waktu-olahraga');
    Route::post('/tingkat-waktu', [AktivitasController::class, 'store']);

// -----------------------------
// ✅ Halaman Preferensi Makan
// -----------------------------
Route::get('/preferensi-makan', function () {
    return view('preferensi-makan');
})->middleware(['auth', 'verified'])->name('halaman-preferensi-makan');

Route::post('/simpan-preferensi-makan', [AktivitasController::class, 'simpanPreferensiMakan'])
    ->middleware(['auth', 'verified'])->name('simpan-preferensi-makan');

// -----------------------------
// ✅ Halaman 5 (Setelah Preferensi Makan)
// -----------------------------
Route::get('/halaman5', function () {
    return view('halaman5');
})->middleware(['auth', 'verified'])->name('halaman5');

// -----------------------------
// ✅ Halaman 6 (Setelah Halaman 5)
// -----------------------------
Route::get('/halaman6', function () {
    return view('halaman6');
})->middleware(['auth', 'verified'])->name('halaman6');

// -----------------------------
// ✅ Navigasi Sebelumnya
// -----------------------------
Route::get('/halaman-sebelumnya', function () {
    return redirect()->route('isi-profil');
})->middleware(['auth', 'verified'])->name('halaman-sebelumnya');

// -----------------------------
// ✅ Halaman Sidebar: Profil, Deteksi, Olahraga, Makanan
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/halaman-profil', function () {
        return view('halaman-profil');
    })->name('halaman-profil');

    Route::get('/deteksi', function () {
        return view('deteksi');
    })->name('deteksi');

    Route::get('/halaman-makanan', function () {
        return view('halaman-makanan');
    })->name('halaman-makanan');
});

// -----------------------------
// ✅ Profile Management
// -----------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// -----------------------------
// ✅ Auth Routes (Register/Login)
// -----------------------------
require __DIR__.'/auth.php';
