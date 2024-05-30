<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        $beritas = Berita::all();
        $pengunjungs = Auth::User();

        return view('dashboard', compact('wisatas', 'beritas', 'pengunjungs'));	
    }
}

