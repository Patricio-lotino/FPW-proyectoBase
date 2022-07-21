<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/registro', function () {
    return view('registro');
});

Route::get('/asignacion', function () {
    return view('asignacion');
});

Route::get('/consulta', function () {
    return view('consulta');
});

Route::get('/baja', function () {
    return view('baja');
});

Route::get('/actualiza', function () {
    return view('actualiza');
});

Route::get('/login', function () {
    return view('login');
});
