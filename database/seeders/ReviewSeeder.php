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
            'kontent' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',	
            'rating' => 5,  
            'wisata_id' => 1,
            'user_id' => 1,
        ]);
    }
}
