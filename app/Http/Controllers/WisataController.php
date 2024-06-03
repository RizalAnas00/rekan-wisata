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
        $users = Auth::user();

        return view('dashboard', compact('wisatas', 'beritas', 'users'));
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
    $wisata = Wisata::find($id);
    
        if ($wisata) {
            // Menggunakan relasi dari model Wisata untuk mengambil reviews
            $reviews = $wisata->reviews()->with('user')->get();
        } else {
            // Inisialisasi $reviews dengan array kosong jika tidak ada $wisata yang ditemukan
            $reviews = [];
        }

        return view('detailWisata', compact('wisata', 'reviews'));
    }


    public function searchWisata(Request $request)
    {
        $searchTerm = $request->input('search');
        $selectedWilayah = $request->input('wilayah');
        $selectedKategori = $request->input('kategori');
        
        $query = Wisata::query();
    
        if ($searchTerm) {
            $query->where('nama_wisata', 'LIKE', "%{$searchTerm}%")
                ->orWhere('kota', 'LIKE', "%{$searchTerm}%")
                ->orWhere('kategori_wisata', 'LIKE', "%{$searchTerm}%")
                ->orWhere('alamat_lengkap', 'LIKE', "%{$searchTerm}%");
        }

        if ($selectedWilayah && $selectedWilayah != 'all') {
            $query->where('kota', $selectedWilayah);
        }
    
        if ($selectedKategori && $selectedKategori != 'all') {
            $query->where('kategori_wisata', $selectedKategori);
        }
    
        $wisatas = $query->get();
        $kategoris = Wisata::select('kategori_wisata')->distinct()->get();
        $wilayahs = Wisata::select('kota')->distinct()->get();
    
        return view('rekomendasiWisata', compact('wisatas', 'kategoris', 'wilayahs'));
    }
}


