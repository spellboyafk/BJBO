<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuahLokalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MitraPetaniController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BuahImporController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;


Route::get('/test-promo', function () {
    return "TEST PROMO BERHASIL!";
});

// ========================================
// HOME
// ========================================
Route::get('/', function () {
    return view('welcome'); 
});

// ========================================
// DASHBOARD ADMIN
// ========================================
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('products', ProductController::class);
Route::resource('buah-lokals', BuahLokalController::class);
Route::resource('buah-impors', BuahImporController::class);
Route::resource('orders', OrderController::class);
Route::resource('promos', PromoController::class);
Route::resource('mitra-petanis', MitraPetaniController::class);
Route::resource('order-items', OrderItemController::class);
Route::resource('users', UserController::class);
Route::resource('user-profiles', UserProfileController::class);

// ========================================
// BUAH LOKAL
// ========================================
Route::get('/buah-lokal', [BuahLokalController::class, 'index'])->name('buah.lokal');
Route::get('/buah-lokal/{id}', [BuahLokalController::class, 'show'])->name('buah.lokal.show');

// ========================================
// BUAH IMPOR - PUBLIC ✅ TAMBAH INI
// ========================================
Route::get('/buah-impor', [BuahImporController::class, 'index'])->name('buah.impor');
Route::get('/buah-impor/{id}', [BuahImporController::class, 'show'])->name('buah.impor.show');

// ========================================
// PAKET BUAH
// ========================================
Route::get('/paket-buah', function () {
    return view('paket-buah');
})->name('paket.buah');

// ========================================
// PROMO - PUBLIC
// ========================================
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::post('/promo/validate', [PromoController::class, 'validate'])->name('promo.validate');

// ========================================
// MITRA TOKO
// ========================================
Route::get('/mitra-toko', function () {
    return view('mitra-toko');
})->name('mitra.toko');

// ========================================
// MITRA PETANI - PUBLIC
// ========================================
Route::get('/mitra-petani', [MitraPetaniController::class, 'create'])->name('mitra.petani');
Route::post('/mitra-petani', [MitraPetaniController::class, 'store'])->name('mitra.petani.store');

// ========================================
// ADMIN - MITRA PETANI
// ========================================
Route::prefix('admin/mitra-petani')->name('admin.mitra-petani.')->group(function () {
    Route::get('/', [MitraPetaniController::class, 'index'])->name('index');
    Route::get('/{id}', [MitraPetaniController::class, 'show'])->name('show');
    Route::post('/{id}/update-status', [MitraPetaniController::class, 'updateStatus'])->name('update-status');
    Route::delete('/{id}', [MitraPetaniController::class, 'destroy'])->name('destroy');
});

// ========================================
// ADMIN - PROMO
// ========================================
Route::prefix('admin/promo')->name('admin.promo.')->group(function () {
    Route::get('/', [PromoController::class, 'adminIndex'])->name('index');
    Route::get('/create', [PromoController::class, 'create'])->name('create');
    Route::post('/', [PromoController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PromoController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PromoController::class, 'update'])->name('update');
    Route::delete('/{id}', [PromoController::class, 'destroy'])->name('destroy');
    Route::post('/{id}/toggle', [PromoController::class, 'toggleStatus'])->name('toggle');
});

// ========================================
// ADMIN - BUAH IMPOR
// ========================================
Route::prefix('admin/buah-impor')->name('admin.buah-impor.')->group(function () {
    Route::get('/', [BuahImporController::class, 'adminIndex'])->name('index');
    Route::get('/create', [BuahImporController::class, 'create'])->name('create');
    Route::post('/', [BuahImporController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BuahImporController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BuahImporController::class, 'update'])->name('update');
    Route::delete('/{id}', [BuahImporController::class, 'destroy'])->name('destroy');
    Route::post('/{id}/toggle', [BuahImporController::class, 'toggleStatus'])->name('toggle');
});
