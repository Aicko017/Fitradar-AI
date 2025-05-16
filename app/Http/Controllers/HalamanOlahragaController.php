<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HalamanOlahragaController extends Controller
{
    public function index(): View
    {
        return view('halaman-olahraga');
    }
}