<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function next()
    {
        // Arahkan ke halaman selanjutnya (ganti dengan nama view yang sesuai)
        return view('halaman-selanjutnya');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }
}
