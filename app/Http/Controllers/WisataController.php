<?php

// app/Http/Controllers/WisataController.php

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
        $pengunjungs = Auth::user();

        return view('dashboard', compact('wisatas', 'beritas', 'pengunjungs'));
    }

    public function showRekomendasi(Request $request)
    {
        $query = Wisata::query();

        if ($request->has('kategori') && $request->kategori != 'all') {
            $query->where('kategori_wisata', $request->kategori);
        }

        if ($request->has('wilayah') && $request->wilayah != 'all') {
            $query->where('kota', $request->wilayah);
        }

        $wisatas = $query->get();
        $kategoris = Wisata::select('kategori_wisata')->distinct()->get();
        $wilayahs = Wisata::select('kota')->distinct()->get();
    
        return view('rekomendasiWisata', compact('wisatas', 'kategoris', 'wilayahs'));
    }



    public function tampilDetail($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('detailWisata', compact('wisata'));
    }
}


