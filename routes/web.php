<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuahLokalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MitraPetaniController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BuahImporController;
<<<<<<< HEAD
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
=======
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;


Route::get('/test-promo', function () {
    return "TEST PROMO BERHASIL!";
});
>>>>>>> 3b1ca24dfc0c2799b402a40dff19dc1006adde2d

// ========================================
// HOME
// ========================================
Route::get('/', function () {
    return view('welcome'); 
});

// ========================================
// PUBLIC ROUTES
// ========================================
<<<<<<< HEAD
=======

/*
|--------------------------------------------------------------------------
| ADMIN AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');


Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA (TERKUNCI)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {

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

        Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');
});
});

>>>>>>> 3b1ca24dfc0c2799b402a40dff19dc1006adde2d

// Buah Lokal
Route::get('/buah-lokal', [BuahLokalController::class, 'index'])->name('buah.lokal');
Route::get('/buah-lokal/{id}', [BuahLokalController::class, 'show'])->name('buah.lokal.show');

// Buah Impor
Route::get('/buah-impor', [BuahImporController::class, 'index'])->name('buah.impor');
Route::get('/buah-impor/{id}', [BuahImporController::class, 'show'])->name('buah.impor.show');

// Paket Buah
Route::get('/paket-buah', function () {
    return view('paket-buah');
})->name('paket.buah');

// Promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::post('/promo/validate', [PromoController::class, 'validate'])->name('promo.validate');

// Mitra Toko
Route::get('/mitra-toko', function () {
    return view('mitra-toko');
})->name('mitra.toko');

// Mitra Petani - Form Pendaftaran
Route::get('/mitra-petani', [MitraPetaniController::class, 'create'])->name('mitra.petani');
Route::post('/mitra-petani', [MitraPetaniController::class, 'store'])->name('mitra.petani.store');

// ========================================
// AUTHENTICATED ROUTES (LOGIN REQUIRED)
// ========================================
Route::middleware('auth')->group(function () {
    
    // Profile Routes (dari Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // ========================================
    // HAPUS CUSTOMER DASHBOARD - REDIRECT KE HOME ATAU ADMIN
    // ========================================
    Route::get('/dashboard', function () {
        // Jika admin, redirect ke admin dashboard
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        
        // Jika customer, redirect ke homepage
        return redirect('/');
    })->name('dashboard');
    
    // ========================================
    // CART ROUTES - UNTUK CUSTOMER
    // ========================================
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/add', [CartController::class, 'add'])->name('add');
        Route::patch('/update/{id}', [CartController::class, 'update'])->name('update');
        Route::delete('/remove/{id}', [CartController::class, 'remove'])->name('remove');
        Route::delete('/clear', [CartController::class, 'clear'])->name('clear');
    });
});

// ========================================
// ADMIN ROUTES - REQUIRE LOGIN + ADMIN ROLE
// ========================================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // ========================================
    // Mitra Petani - Admin
    // ========================================
    Route::prefix('mitra-petani')->name('mitra-petani.')->group(function () {
        Route::get('/', [MitraPetaniController::class, 'index'])->name('index');
        Route::get('/{id}', [MitraPetaniController::class, 'show'])->name('show');
        Route::post('/{id}/update-status', [MitraPetaniController::class, 'updateStatus'])->name('update-status');
        Route::delete('/{id}', [MitraPetaniController::class, 'destroy'])->name('destroy');
    });

    // ========================================
    // Promo - Admin
    // ========================================
    Route::prefix('promo')->name('promo.')->group(function () {
        Route::get('/', [PromoController::class, 'adminIndex'])->name('index');
        Route::get('/create', [PromoController::class, 'create'])->name('create');
        Route::post('/', [PromoController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [PromoController::class, 'edit'])->name('edit');
        Route::put('/{id}', [PromoController::class, 'update'])->name('update');
        Route::delete('/{id}', [PromoController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/toggle', [PromoController::class, 'toggleStatus'])->name('toggle');
    });

    // ========================================
    // Buah Impor - Admin
    // ========================================
    Route::prefix('buah-impor')->name('buah-impor.')->group(function () {
        Route::get('/', [BuahImporController::class, 'adminIndex'])->name('index');
        Route::get('/create', [BuahImporController::class, 'create'])->name('create');
        Route::post('/', [BuahImporController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [BuahImporController::class, 'edit'])->name('edit');
        Route::put('/{id}', [BuahImporController::class, 'update'])->name('update');
        Route::delete('/{id}', [BuahImporController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/toggle', [BuahImporController::class, 'toggleStatus'])->name('toggle');
    });

    // ========================================
    // Buah Lokal - Admin
    // ========================================
    Route::prefix('buah-lokal')->name('buah-lokal.')->group(function () {
        Route::get('/', [BuahLokalController::class, 'adminIndex'])->name('index');
        Route::get('/create', [BuahLokalController::class, 'create'])->name('create');
        Route::post('/', [BuahLokalController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [BuahLokalController::class, 'edit'])->name('edit');
        Route::put('/{id}', [BuahLokalController::class, 'update'])->name('update');
        Route::delete('/{id}', [BuahLokalController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/toggle', [BuahLokalController::class, 'toggleStatus'])->name('toggle');
    });
});

// ========================================
// BREEZE AUTH ROUTES (LOGIN, REGISTER, LOGOUT)
// ========================================
require __DIR__.'/auth.php';
