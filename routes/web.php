<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('fifas', App\Http\Controllers\DivisionController::class);

Route::resource('fifas', App\Http\Controllers\JugadorController::class);

Route::resource('fifas', App\Http\Controllers\TiendaController::class);

Route::resource('fifas', App\Http\Controllers\EquipoController::class);

Route::resource('fifas', App\Http\Controllers\PaisController::class);

