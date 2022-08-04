<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\ActualizaController;
use App\Http\Controllers\BajaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\InicioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actualiza', [ActualizaController::class, 'index']);

Route::get('/asignacion', [AsignacionController::class, 'index']);

Route::get('/baja', [BajaController::class, 'index']);

Route::get('/categoria', [CategoriaController::class, 'index']);

Route::get('/consulta', [ConsultaController::class, 'index']);

Route::get('/inicio', [InicioController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/registro', [RegistroController::class, 'index']);

Route::get('/sucursal', [SucursalController::class, 'index']);
