@extends('layouts.master')

@section('header')

<h2>Asignación de Productos a las Sucursales</h2>

@stop

@section('content')

<br><div class="mb-3 row">
  <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputCodigo">
  </div>

<br><div class="mb-3 row">
  <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputNombre">
  </div><br>

  <br><h2>Cantidad de productos a cada Sucursal</h2><br>

<br><br><div class="mb-3 row">
  <label for="inputLaSerena" class="col-sm-2 col-form-label">Sucursal La Serena</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputLaSerena" min="0">
  </div>

<br><div class="mb-3 row">
  <label for="inputCurico" class="col-sm-2 col-form-label">Sucursal Curico</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputCurico" min="0">
  </div>

<br><div class="mb-3 row">
  <label for="inputOsorno" class="col-sm-2 col-form-label">Sucursal Osorno</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputOsorno" min="0">
  </div>

 @stop