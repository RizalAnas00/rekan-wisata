<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create(Request $request)
    {
        $wisata_id = $request->query('wisata_id');
        return view('reviewUser', compact('wisata_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'kontent' => 'required|string|max:1000',
            'wisata_id' => 'required|exists:wisatas,id', // Make sure 'wisata' is the correct table name
        ]);

        $review = new Review ([
            'kontent' => $request->kontent,
            'rating' => $request->rating,
            'wisata_id' => $request->wisata_id,
            'user_id' => Auth::id(),
        ]);

        $review->save();

        return redirect()->route('detail.Wisata', ['id' => $request->wisata_id])->with('success', 'Review submitted successfully');
    }
}

