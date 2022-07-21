<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\asignacionController;
use App\Http\Controllers\ActualizaController;
use App\Http\Controllers\BajaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/registro', function () {
    return view('registro');
});*/

Route::get('/registro', [RegistroController::class, 'index']);

/*Route::get('/asignacion', function () {
    return view('asignacion');
});*/

Route::get('/asignacion', [asignacionController::class, 'index']);

/*Route::get('/consulta', function () {
    return view('consulta');
});*/

Route::get('/consulta', [ConsultaController::class, 'index']);

/*Route::get('/baja', function () {
    return view('baja');
});*/

Route::get('/baja', [BajaController::class, 'index']);

/*Route::get('/actualiza', function () {
    return view('actualiza');
});*/

Route::get('/actualiza', [ActualizaController::class, 'index']);

/*Route::get('/login', function () {
    return view('login');
});*/

Route::get('/login', [LoginController::class, 'index']);
