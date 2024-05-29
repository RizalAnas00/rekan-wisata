<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wisata; // Import the Wisata model

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data pertama
        Wisata::create([
            'nama_wisata' => 'Benteng Rottenfort',
            'kota' => 'Semarang',
            'alamat_lengkap' => 'Jl. Rottenfort 1 No. 1, Semarang',  
            'deskripsi_wisata' => 'Wisata yang ada di Semarang yang sangat indah',
            'kategori_wisata' => 'Sejarah',
            'image_path' => 'images/Rectangle 41.png',
        ]);

        // Menambahkan data kedua
        Wisata::create([
            'nama_wisata' => 'Pantai Kuta',
            'kota' => 'Bali',
            'alamat_lengkap' => 'Jl. Pantai Kuta, Bali',  
            'deskripsi_wisata' => 'Pantai yang terkenal di Bali dengan pasir putihnya',
            'kategori_wisata' => 'Pantai',
            'image_path' => 'images/pantai1.jpg',
        ]);

        // Menambahkan data ketiga
        Wisata::create([
            'nama_wisata' => 'Taman Nasional Gunung Bromo',
            'kota' => 'Probolinggo',
            'alamat_lengkap' => 'Jl. Bromo, Probolinggo',  
            'deskripsi_wisata' => 'Taman nasional yang terkenal dengan pemandangan Gunung Bromo',
            'kategori_wisata' => 'Gunung',
            'image_path' => 'images/prambanan.jpg',
        ]);

        // Menambahkan data keempat
        Wisata::create([
            'nama_wisata' => 'Danau Toba',
            'kota' => 'Sumatera Utara',
            'alamat_lengkap' => 'Jl. Danau Toba, Sumatera Utara',  
            'deskripsi_wisata' => 'Danau yang merupakan danau vulkanik terbesar di Indonesia',
            'kategori_wisata' => 'Danau',
            'image_path' => 'images/C28DCB80-1C03-405F-923D-ABBC42D15A94-1740977994.webp',
        ]);
    }
}
