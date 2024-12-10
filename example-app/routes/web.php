<?php

use App\Http\Controllers\DamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dam', DamController::class);
