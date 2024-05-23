<?php
namespace PiratePixelX\Developer;

use Illuminate\Support\Facades\Route;



Route::get('/developer', function () {
    return view('developer::index');
})->name('developer');
