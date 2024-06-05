<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class JadwalController extends Controller
{
    public function index (){
        $userId = Auth::id();

        // Menampilkan jadwal yang dibuat oleh pengguna yang sedang login
        $jadwals = Jadwal::where('user_id', $userId)->get();

        return view('jadwal', compact('jadwals'));
    }

    public function create()
    {
        $wisatas = Wisata::all(); // Mengambil semua data wisata
        return view('tambahJadwal', compact('wisatas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'wisata_id' => 'required',
            'tanggal_berangkat' => 'required|date',
            'deskripsi' => 'required',
        ]);

        $jadwal = new Jadwal([
            'nama' => $request->nama,
            'wisata_id' => $request->wisata_id,
            'tanggal_berangkat' => $request->tanggal_berangkat,
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::id(), // Menyimpan ID user yang sedang login
        ]);

        $jadwal->save();

        return redirect()->route('jadwal')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit(Jadwal $jadwal)
    {
        $wisatas = Wisata::all();
        return view('editJadwal', compact('jadwal','wisatas'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'nama' => 'required',
            'wisata_id' => 'required',
            'tanggal_berangkat' => 'required|date',
            'deskripsi' => 'required',
        ]);

        $jadwal->update($request->all());

        return redirect()->route('jadwal')->with('success', 'Jadwal berhasil diperbarui');
    }

}
