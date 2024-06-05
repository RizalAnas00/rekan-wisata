<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
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

// Routing sidebar
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
    Route::get('/pesanTG', [WisataController::class, 'pesanTg'])->name('pesanTg');
    Route::get('/profile', [WisataController::class, 'profile'])->name('profile');
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');


//jadwal && tambah jadwal

    Route::get('/tambahJadwal', [JadwalController::class, 'tampilTambahJadwal']);
//search
    Route::post('/dashboard', [WisataController::class, 'searchWisata']);
    Route::get('/searchWisata', [WisataController::class, 'searchWisata'])->name('search.wisata');
//review
    Route::get('/reviews/create', [ReviewController::class, 'create'])->name('create.review');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('store.review');

//berita
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('detail.berita');

//Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit-email', [ProfileController::class, 'editEmail'])->name('profile.editEmail');
    Route::post('/profile/update-email', [ProfileController::class, 'updateEmail'])->name('profile.updateEmail');
    Route::get('/profile/edit-phone', [ProfileController::class, 'editPhone'])->name('profile.editPhone');
    Route::post('/profile/update-phone', [ProfileController::class, 'updatePhoneNumber'])->name('profile.updatePhoneNumber');

    Route::get('/home', function () {
        return 'Home Page';
    })->name('home');
});



