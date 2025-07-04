<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IsiProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TingkatAktivitasController;
use App\Http\Controllers\VisionAIController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\PreferensiMakanController;
use App\Http\Controllers\RekomendasiMakananController;
use App\Http\Controllers\HalamanOlahragaController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';

// -----------------------------
// ✅ Dashboard
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('/halaman-dashboard', [DashboardController::class, 'index'])->name('halaman-dashboard');
});

// -----------------------------
// ✅ Profil (SATU SAJA)
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/halaman-profil', [IsiProfilController::class, 'showProfil'])->name('halaman-profil');
    Route::post('/halaman-profil', [IsiProfilController::class, 'store'])->name('halaman-profil.store');
});

// -----------------------------
// ✅ Aktivitas
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/halaman-selanjutnya', fn () => view('halaman-selanjutnya'))->name('halaman-selanjutnya');
    Route::get('/tingkat-waktu', fn () => view('tingkat-waktu'))->name('tingkat-waktu');
    Route::post('/tingkat-waktu', [AktivitasController::class, 'store']);
    Route::post('/simpan-waktu-olahraga', [AktivitasController::class, 'simpanWaktu'])->name('simpan-waktu-olahraga');
});

// -----------------------------
// ✅ Preferensi Makan
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/preferensi-makan', fn () => view('preferensi-makan'))->name('halaman-preferensi-makan');
    Route::post('/simpan-preferensi-makan', [PreferensiMakanController::class, 'simpanPreferensiMakan'])->name('simpan-preferensi-makan');
    Route::get('/halaman-makanan', [RekomendasiMakananController::class, 'tampilkanRekomendasi'])->name('halaman-makanan');
});

// -----------------------------
// ✅ Deteksi Makanan (Vision AI)
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/deteksi', fn () => view('deteksi'))->name('deteksi');
    Route::post('/simpan-hasil-deteksi', [VisionAIController::class, 'simpanHasilDeteksi']);
});

// -----------------------------
// ✅ Navigasi tambahan
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/halaman5', fn () => view('halaman5'))->name('halaman5');
    Route::get('/halaman6', fn () => view('halaman6'))->name('halaman6');
    Route::get('/halaman-sebelumnya', fn () => redirect()->route('halaman-profil'))->name('halaman-sebelumnya');
    Route::get('/halaman-olahraga', [HalamanOlahragaController::class, 'index'])->name('halaman-olahraga');
});

// -----------------------------
// ✅ Profile Settings
// -----------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
