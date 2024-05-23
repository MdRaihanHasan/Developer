<?php
namespace PiratePixelX\Developer;

use Illuminate\Support\Facades\Route;
use PiratePixelX\Developer\Controllers\DeveloperPageController;



Route::get('/developer', [DeveloperPageController::class, 'index']);
