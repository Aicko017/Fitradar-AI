<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IsiProfilController;
use App\Http\Controllers\TingkatAktivitasController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\HalamanOlahragaController; // Pastikan kamu punya controller ini

// -----------------------------
// ✅ Halaman Awal (Landing Page)
// -----------------------------
Route::get('/', function () {
    return view('welcome');
});

// -----------------------------
// ✅ Halaman Dashboard
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/halaman-dashboard', function () {
        return view('halaman-dashboard');
    })->name('halaman-dashboard');
});

// -----------------------------
// ✅ Isi Profil
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/isi-profil', [IsiProfilController::class, 'index'])->name('isi-profil');
    Route::post('/isi-profil', [IsiProfilController::class, 'store'])->name('simpan-profil');
});

// -----------------------------
// ✅ Halaman Tingkat Aktivitas Fisik & Waktu
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/halaman-selanjutnya', function () {
        return view('halaman-selanjutnya');
    })->name('halaman-selanjutnya');

    Route::get('/tingkat-waktu', function () {
        return view('tingkat-waktu');
    })->name('tingkat-waktu');

    Route::post('/tingkat-waktu', [AktivitasController::class, 'store']);
    Route::post('/simpan-waktu-olahraga', [AktivitasController::class, 'simpanWaktu'])->name('simpan-waktu-olahraga');
});

// -----------------------------
// ✅ Halaman Preferensi Makan
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/preferensi-makan', function () {
        return view('preferensi-makan');
    })->name('halaman-preferensi-makan');

    Route::post('/simpan-preferensi-makan', [AktivitasController::class, 'simpanPreferensiMakan'])->name('simpan-preferensi-makan');
});

// -----------------------------
// ✅ Halaman Selanjutnya
// -----------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/halaman5', function () {
        return view('halaman5');
    })->name('halaman5');

    Route::get('/halaman6', function () {
        return view('halaman6');
    })->name('halaman6');

    Route::get('/halaman-sebelumnya', function () {
        return redirect()->route('isi-profil');
    })->name('halaman-sebelumnya');
});

// -----------------------------
// ✅ Halaman Sidebar (Profil, Deteksi, Makanan)
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
// ✅ Auth (Login, Register, Email Verification)
// -----------------------------


Route::get('/halaman-olahraga', [HalamanOlahragaController::class, 'index'])->name('halaman-olahraga');
require __DIR__.'/auth.php';
