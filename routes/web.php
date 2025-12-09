<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuahLokalController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome'); 
});

// Dashboard Admin - Gunakan Controller
Route::get('/panel', [DashboardController::class, 'index'])->name('panel');

// Buah Lokal - Gunakan Controller dengan fitur lengkap
Route::get('/buah-lokal', [BuahLokalController::class, 'index'])->name('buah.lokal');
Route::get('/buah-lokal/{id}', [BuahLokalController::class, 'show'])->name('buah.lokal.show');

// Route lainnya
Route::get('/buah-impor', function () {
    return view('buah-impor');
})->name('buah.impor');

Route::get('/paket-buah', function () {
    return view('paket-buah');
})->name('paket.buah');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/mitra-toko', function () {
    return view('mitra-toko');
})->name('mitra.toko');

Route::get('/mitra-petani', function () {
    return view('mitra-petani');
})->name('mitra.petani');
