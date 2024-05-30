<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index (){
        $jadwals = Jadwal::all();

        return view('jadwal', compact('jadwals'));
    }

    public function tampilTambahJadwal()
    {
        return view('tambahJadwal');
    }
}
