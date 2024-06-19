<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Menampilkan halaman review untuk wisata tertentu.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $wisata_id = $request->query('wisata_id');
        return view('reviewUser', compact('wisata_id'));
    }

    /**
     * Menyimpan review dari user.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Mengvalidasi inputan dari user
        $request->validate([
            'rating' => 'required|integer|min:1|max:5', // Rating harus integer antara 1 sampai 5
            'kontent' => 'required|string|max:1000', // Kontent tidak boleh kosong dan maksimal 1000 karakter
            'wisata_id' => 'required|exists:wisatas,id', // Wisata_id harus ada di tabel wisata
        ]);

        // Membuat instansi baru dari model Review
        $review = new Review ([
            'kontent' => $request->kontent, // Menyimpan kontent dari inputan user
            'rating' => $request->rating, // Menyimpan rating dari inputan user
            'wisata_id' => $request->wisata_id, // Menyimpan wisata_id dari inputan user
            'user_id' => Auth::id(), // Menyimpan id user yang sedang login
        ]);

        // Menyimpan review ke database
        $review->save();

        // Redirect ke halaman detail wisata dengan pesan sukses
        return redirect()->route('detail.Wisata', ['id' => $request->wisata_id])->with('success', 'Review berhasil dikirim');
    }
}

