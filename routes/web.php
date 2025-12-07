<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/panel', function () {

    return view('admin.dashboard');
});
Route::get('/buah-lokal', function () {
    return view('buah-lokal');
})->name('buah.lokal');

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

