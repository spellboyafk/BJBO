<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
=======
    return view('welcome'); 
});

Route::get('/panel', function () {
>>>>>>> e12509093be10162dc6cfeaf3306c1fae87a5add
    return view('admin.dashboard');
});
