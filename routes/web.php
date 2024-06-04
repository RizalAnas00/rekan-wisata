<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/register/step1', [AuthenticationController::class, 'showRegisterFormStep1'])->name('register.step1');
Route::post('/register/step1', [AuthenticationController::class, 'processRegisterFormStep1']);

Route::get('/register/step2', [AuthenticationController::class, 'showRegisterFormStep2'])->name('register.step2');
Route::post('/register/step2', [AuthenticationController::class, 'processRegisterFormStep2']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [WisataController::class, 'index'])->name('dashboard');

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwalAwal');

Route::get('/tambahJadwal', [JadwalController::class, 'tampilTambahJadwal'])->name('TambahJadwal');
Route::post('/tambahJadwal', [JadwalController::class, 'processTambahJadwal']);

    Route::get('/home', function () {
        return 'Home Page';
    })->name('home');
});



