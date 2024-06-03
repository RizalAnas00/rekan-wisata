<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'John Doe',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-01-01',
            'no_hp' => '081234567890',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'jenis_kelamin' => 'Laki-laki',
            'pekerjaan' => 'Pengembang',
        ]);

        User::create([
            'nama' => 'Jane Doe',
            'tempat_lahir' => 'Surabaya',
            'tanggal_lahir' => '1995-05-05',
            'no_hp' => '087654321098',
            'email' => 'jane@example.com',
            'password' => Hash::make('password456'),
            'jenis_kelamin' => 'Perempuan',
            'pekerjaan' => 'Desainer',
        ]);
    }
}
