<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Berita;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        $beritas = Berita::all();

        return view('dashboard', compact('wisatas', 'beritas'));
    }
}

