<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Method to show the review form
    public function create()
    {
        return view('reviewUser');
    }

    // Method to handle the review form submission
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'kontent' => 'required|string|max:1000',
            'wisata_id' => 'required|exists:wisata,id', // Assuming wisata is the table for Wisata model
        ]);

        Review::create([
            'kontent' => $request->kontent,
            'rating' => $request->rating,
            'wisata_id' => $request->wisata_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('detailWisata')->with('success', 'Review submitted successfully');
    }
}
