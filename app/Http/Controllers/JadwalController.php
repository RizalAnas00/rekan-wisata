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

    public function processTambahJadwal(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nama' => 'required|string|max:50',
        'tanggal_berangkat' => 'required|date',
        'deskripsi' => 'required|string|max:100'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Gather validated data
    $data = $validator->validated();

    // Create a new Jadwal record with the validated data
    $jadwal = Jadwal::create($data);

    return redirect()->route('jadwalAwal');
}

}
