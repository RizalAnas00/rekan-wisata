<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


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
