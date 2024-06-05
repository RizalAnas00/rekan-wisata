<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

//Login
Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);


//Register
Route::get('/register/step1', [AuthenticationController::class, 'showRegisterFormStep1'])->name('register.step1');
Route::post('/register/step1', [AuthenticationController::class, 'processRegisterFormStep1']);

Route::get('/register/step2', [AuthenticationController::class, 'showRegisterFormStep2'])->name('register.step2');
Route::post('/register/step2', [AuthenticationController::class, 'processRegisterFormStep2']);

//Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [WisataController::class, 'index'])->name('dashboard');
    Route::get('/rekomendasiWisata', [WisataController::class, 'showRekomendasi'])->name('rekomendasi.Wisata');
//wisata
    Route::get('/wisata/{id}', [WisataController::class, 'tampilDetail'])->name('detail.Wisata');

    Route::get('/jadwal', [JadwalController::class, 'index']);
    Route::get('/tambahJadwal', [JadwalController::class, 'tampilTambahJadwal']);
//search
    Route::post('/dashboard', [WisataController::class, 'searchWisata']);
    Route::get('/searchWisata', [WisataController::class, 'searchWisata'])->name('search.wisata');
//review
    Route::get('/review', [ReviewController::class, 'index'])->name('review');


    Route::get('/home', function () {
        return 'Home Page';
    })->name('home');
});



