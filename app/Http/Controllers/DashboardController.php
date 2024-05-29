<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $beritas = Berita::all(); // Mendapatkan semua data berita dari model

        return view('dashboard', compact('beritas')); // Meneruskan data berita ke tampilan dashboard
    }
}

