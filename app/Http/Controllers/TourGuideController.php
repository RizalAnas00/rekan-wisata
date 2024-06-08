<?php

namespace App\Http\Controllers;

use App\Models\TourGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function show($id)
    {
        $guide = TourGuide::findOrFail($id);

        return view('detailTourGuide', compact('guide'));
    }
}




