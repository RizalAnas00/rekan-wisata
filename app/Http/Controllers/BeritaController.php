<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('dashboard', compact('beritas'));
    }

    public function show($id)
    {
        $berita = Berita::find($id);
        return view('berita', compact('berita'));
    }
}

