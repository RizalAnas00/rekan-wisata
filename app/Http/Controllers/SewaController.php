<?php

// app/Http/Controllers/SewaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\TourGuide;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tour_guide_id' => 'required|exists:tour_guides,id',
            'tanggal_keberangkatan' => 'required|date',
            'pembayaran' => 'required|in:bca,dana,ovo',
        ]);

        $user = Auth::user();
        $tourGuide = TourGuide::find($request->tour_guide_id);

        $sewa = new Sewa();
        $sewa->user_id = $user->id;
        $sewa->tour_guide_id = $tourGuide->id;
        $sewa->wisata_id = $tourGuide->wisatas->first()->id; // asumsikan mengambil wisata pertama
        $sewa->tanggal_keberangkatan = $request->tanggal_keberangkatan; // jika jadwal disimpan di tabel terpisah, sesuaikan dengan logikanya
        $sewa->pembayaran = $request->pembayaran;
        $sewa->save();

        return redirect()->route('sewa.show', $sewa->id);
    }

    public function show(Sewa $sewa)
    {
        if ($sewa->user_id !== Auth::id()) {
            abort(403);
        }
        $tourGuide = $sewa->tourGuide;
        $wisatas = $tourGuide->wisatas;

        return view('sewa', compact('sewa','tourGuide','wisatas'));
    }
}
