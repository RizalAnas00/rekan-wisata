<?php

namespace Database\Seeders;

use App\Models\TourGuide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TourguideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TourGuide::create  ([
                'nama' => 'John Doe',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-01-01',
                'kota_wisata' => 'Jakarta',
                'bahasa' => 'Indonesia, Inggris',
                'harga' => 500000,
                'nama_tempat_wisata' => 'Monas',
                'no_hp' => '081234567890',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'jenis_kelamin' => 'Laki-laki',
        ]);

        TourGuide::create  ([
            'nama' => 'Jane Smith',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1985-05-10',
            'kota_wisata' => 'Bandung',
            'bahasa' => 'Indonesia, Inggris, Jepang',
            'harga' => 600000,
            'nama_tempat_wisata' => 'Tangkuban Perahu',
            'no_hp' => '081234567891',
            'email' => 'jane@example.com',
            'password' => Hash::make('password'),
            'jenis_kelamin' => 'Perempuan',
        ]);
    }
}
