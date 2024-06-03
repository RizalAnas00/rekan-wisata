<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'kontent' => 'Parkirnya luas, sangat nyaman, pedagangnya ramah',	
            'rating' => 3,  
            'wisata_id' => 1,
            'user_id' => 2,
        ]);

        Review::create([
            'kontent' => 'tempatnya bagus dan nyaman. Padahal jaraknya jauh',	
            'rating' => 4,  
            'wisata_id' => 1,
            'user_id' => 3,
        ]);
    }
}
