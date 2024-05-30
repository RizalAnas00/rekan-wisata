<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $beritas = Berita::all(); // Mendapatkan semua data berita dari model
        $pengunjungs = Auth::User();
        return view('dashboard', compact('beritas','pengunjungs')); // Meneruskan data berita ke tampilan dashboard
    }
}

