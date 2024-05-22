<?php

use Illuminate\Support\Facades\Route;

Route::get('developer', function () {
    return view('developer::developer');
});
