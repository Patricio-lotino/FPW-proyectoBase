<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActualizaController;
//use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\BajaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\EliminarSucursalController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ListadoController;
use App\Http\Controllers\ListadoCategoriaController;
use App\Http\Controllers\ListadoSucursalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RegistroCategoriaController;
use App\Http\Controllers\RegistroSucursalController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\AsignarProdSucursalController;
use App\Http\Controllers\MenuProductosController;
use App\Http\Controllers\MenuCategoriasController;
use App\Http\Controllers\MenuSucursalesController;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/actualiza', [ActualizaController::class, 'index']);

//Route::post('/actualiza', [ActualizaController::class, 'store']);//

//Route::get('/asignacion', [AsignacionController::class, 'index']);

Route::get('/asignacion', [AsignarProdSucursalController::class, 'index']);

Route::get('/baja', [BajaController::class, 'index']);

Route::get('/categoria', [CategoriaController::class, 'index']);

Route::get('/consulta', [ConsultaController::class, 'index']);

Route::get('/eliminarSucursal', [EliminarSucursalController::class, 'index']);

Route::get('/inicio', [InicioController::class, 'index']);

Route::get('/listado',[ListadoController::class,'index']);

Route::get('/listadoCategoria',[ListadoCategoriaController::class,'index']);

Route::get('/listadoSucursal',[ListadoSucursalController::class,'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/menuCategorias', [MenuCategoriasController::class, 'index']);

Route::get('/menuProductos', [MenuProductosController::class, 'index']);

Route::get('/menuSucursales', [MenuSucursalesController::class, 'index']);

Route::get('/registro', [RegistroController::class, 'index']);

Route::get('/registroCategoria', [RegistroCategoriaController::class, 'index']);

Route::get('/registroSucursal', [RegistroSucursalController::class, 'index']);

Route::get('/sucursal', [SucursalController::class, 'index']);

/*Route::get('listar', [
    'uses' => 'App\Http\Controllers\AgregarController@listar',
    'as' => 'listarproducto'
]);*/

Route::get('/registro', [ListadoController::class, 'agregar']);

Route::post('/guardar', [ListadoController::class, 'guardar']);

Route::get('/actualiza', [ActualizaController::class, 'agregar']);

Route::post('/guardar', [ActualizaController::class, 'guardar']);

Route::get('/registroCategoria', [ListadoCategoriaController::class, 'agregar']);

Route::post('/guardar', [ListadoCategoriaController::class, 'guardar']);

Route::get('/registroSucursal', [ListadoSucursalController::class, 'agregar']);

Route::post('/guardar', [ListadoSucursalController::class, 'guardar']);

Route::get('/asignacion', [AsignarProdSucursalController::class, 'agregar']);

Route::post('/guardar', [AsignarProdSucursalController::class, 'guardar']);

/*Route::post('modificar', [
    'uses' => 'App\Http\Controllers\AgregarController@modificar',
    'as' => 'modificarproducto'
]);

Route::get('eliminar', [
    'uses' => 'App\Http\Controllers\AgregarController@eliminar',
    'as' => 'eliminarproducto'
]);

Route::post('guardar', [
    'uses' => 'App\Http\Controllers\AgregarController@guardar',
    'as' => 'guardarproducto'
]);

Route::resource('/producto','App\Http\Controllers\RegistroController');

Route::resource('/categoria','App\Http\Controllers\CategoriaController');

Route::resource('/sucursal','App\Http\Controllers\SucursalController');*/