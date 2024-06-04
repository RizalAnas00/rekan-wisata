<?php

// app/Http/Controllers/WisataController.php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Berita;
use App\Models\Review;
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
        $reviews = Review::where('wisata_id', $id)->get();

        // Hitung rata-rata rating
        $totalRating = $reviews->sum('rating');
        $jumlahReview = $reviews->count();
        $ratingTerkini = $jumlahReview > 0 ? $totalRating / $jumlahReview : 0;

        return view('detailWisata', compact('wisata', 'reviews', 'ratingTerkini'));
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


