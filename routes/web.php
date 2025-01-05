<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\TiendaController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para Equipos
Route::get('/equipos', [EquipoController::class, 'index']);
Route::post('/equipos', [EquipoController::class, 'store']);

// Rutas para Paises
Route::get('/paises', [PaisController::class, 'index']);

// Rutas para Divisiones
Route::get('/divisiones', [DivisionController::class, 'index']);

// Rutas para Jugadores
Route::get('/jugadores', [JugadorController::class, 'index']);

// Rutas para Tiendas
Route::get('/tiendas', [TiendaController::class, 'index']);
