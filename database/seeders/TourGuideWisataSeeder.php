<?php

namespace Database\Seeders;

use App\Models\TourGuide;
use App\Models\Wisata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourGuideWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tourGuide1 = TourGuide::where('email', 'john@example.com')->first();
        $tourGuide2 = TourGuide::where('email', 'jane@example.com')->first();

        $wisata1 = Wisata::where('nama_wisata', 'Benteng Rottenfort')->first();
        $wisata2 = Wisata::where('nama_wisata', 'Pantai Kuta')->first();
        $wisata3 = Wisata::where('nama_wisata', 'Taman Nasional Gunung Bromo')->first();

        // Hubungkan tour guide dengan wisata
        $tourGuide1->wisatas()->attach($wisata1->id);
        $tourGuide1->wisatas()->attach($wisata2->id);

        $tourGuide2->wisatas()->attach($wisata2->id);
        $tourGuide2->wisatas()->attach($wisata3->id);
    }
}
