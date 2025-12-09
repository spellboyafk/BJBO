<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuahLokalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MitraPetaniController;

Route::get('/', function () {
    return view('welcome'); 
});

// Dashboard Admin
Route::get('/panel', [DashboardController::class, 'index'])->name('panel');

// Buah Lokal
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

// Mitra Petani - PUBLIC
Route::get('/mitra-petani', [MitraPetaniController::class, 'create'])->name('mitra.petani');
Route::post('/mitra-petani', [MitraPetaniController::class, 'store'])->name('mitra.petani.store');

// Mitra Petani - ADMIN
Route::prefix('admin/mitra-petani')->group(function () {
    Route::get('/', [MitraPetaniController::class, 'index'])->name('admin.mitra-petani.index');
    Route::get('/{id}', [MitraPetaniController::class, 'show'])->name('admin.mitra-petani.show');
    Route::post('/{id}/update-status', [MitraPetaniController::class, 'updateStatus'])->name('admin.mitra-petani.update-status');
});
