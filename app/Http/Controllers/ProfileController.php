<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function next()
    {
        // Arahkan ke halaman selanjutnya (ganti dengan nama view yang sesuai)
        return view('halaman-selanjutnya');
    }
}
