<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActualizaController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\BajaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ListadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SucursalController;
<<<<<<< HEAD
=======
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ListadoController;
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
use App\Http\Controllers\AgregarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actualiza', [ActualizaController::class, 'index']);

Route::post('/actualiza', [ActualizaController::class, 'store']);

Route::get('/asignacion', [AsignacionController::class, 'index']);

Route::get('/baja', [BajaController::class, 'index']);

Route::get('/categoria', [CategoriaController::class, 'index']);

Route::get('/consulta', [ConsultaController::class, 'index']);

Route::get('/inicio', [InicioController::class, 'index']);

Route::get('/listado',[ListadoController::class,'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/registro', [RegistroController::class, 'index']);

Route::get('/sucursal', [SucursalController::class, 'index']);

<<<<<<< HEAD
Route::get('agregar', [
    'uses' => 'App\Http\Controllers\AgregarController@agregar',
    'as' => 'agregarproducto'
]);

Route::post('guardar', [
    'uses' => 'App\Http\Controllers\AgregarController@guardar',
    'as' => 'guardarproducto'
]);

Route::resource('/producto','App\Http\Controllers\RegistroController');

Route::resource('/categoria','App\Http\Controllers\CategoriaController');

Route::resource('/sucursal','App\Http\Controllers\SucursalController');
=======
Route::get('/listado', [ListadoController::class, 'index']);

Route::get('/agregar', [
    'uses' => 'App\Http\Controllers\AgregarController@agregar',
    'as' => 'agregarproducto']);

Route::post('/guardar', [
    'uses' => 'App\Http\Controllers\AgregarController@guardar',
    'as' => 'guardarproducto']);
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
