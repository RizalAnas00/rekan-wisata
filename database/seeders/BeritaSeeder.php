<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'judul' => 'Candi Prambanan direnovasi, Lagi?',
            'penulis' => 'Ahmad S. Koala',
            'tanggal_terbit' =>'2020-01-01',  
            'kontent' => 'Untuk menambahkan sidebar dengan foto profil user, nama user, dan fitur edit profil serta pemesanan Tour Guide, 
            Anda dapat memodifikasi kode HTML Anda dengan menambahkan elemen-elemen tersebut di bagian sidebar. 
            Berikut adalah contoh kode HTML yang telah dimodifikasi:',
            'image_path' => 'images/pantai1.jpg',
        ]);

        Berita::create([
            'judul' => 'Laut Biru jadi Merah',
            'penulis' => 'Ahmad S. Koala',
            'tanggal_terbit' =>'2024-10-04',  
            'kontent' => 'Laut Biru jadi Merah...',
            'image_path' => 'images/prambanan.jpg',

        ]);
    }
}
