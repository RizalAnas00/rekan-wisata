<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function index()
    {
        $guides = [
            [
                'name' => 'Wiyana Gabriel',
                'gender' => 'Perempuan',
                'age' => 30,
                'languages' => 'Indonesia dan Jerman',
                'location' => 'Semarang',
                'tours' => 6,
                'price' => 1200000,
            ],
            [
                'name' => 'Frederick Setiaji',
                'gender' => 'Laki-laki',
                'age' => 38,
                'languages' => 'Indonesia, Arab, dan Inggris',
                'location' => 'Semarang',
                'tours' => 6,
                'price' => 5000000,
            ],
            [
                'name' => 'Sergio Mamang Napitupulu',
                'gender' => 'Laki-laki',
                'age' => 40,
                'languages' => 'Indonesia dan Spanyol',
                'location' => 'Semarang',
                'tours' => 6,
                'price' => 1200000,
            ],
            [
                'name' => 'Siti Nur Jannah',
                'gender' => 'Perempuan',
                'age' => 32,
                'languages' => 'Indonesia dan Inggris',
                'location' => 'Semarang',
                'tours' => 6,
                'price' => 750000,
            ],
        ];

        return view('TourGuide', compact('guides'));
    }
    public function show($id)
    {
        $guides = [
            [
                'id' => 1,
                'name' => 'Wiyana Gabriel',
                'gender' => 'Perempuan',
                'age' => 30,
                'languages' => 'Indonesia dan Jerman',
                'location' => 'Semarang',
                'tours' => 6,
                'price' => 1200000,
                'destinations' => [
                    'Fort Rotterdam',
                    'Museum punapuna',
                    'Goa Liur kuda',
                    'Candi Aselole',
                    'Bukit Ayam Down Syndrome',
                    'Pantai asikin aja'
                ],
            ],
            // Add more guides here...
        ];

        // Find the guide by ID
        $guide = collect($guides)->firstWhere('id', $id);

        return view('tour-guide.detail', compact('guide'));
    }
}




