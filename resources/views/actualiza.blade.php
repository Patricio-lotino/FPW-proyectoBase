@extends('layouts.master')
@section('title', 'Actualiza')

@section('content')

<h2>Actualizar un producto</h2>

<h4>Ingrese el código del producto para actualizar</h4>

<div class="mb-3 row">
  <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputCodigo">
  </div><br>

  <br><h4>ACTUALIZAR</h4> 

<div class="mb-3 row">
  <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputNombre">
  </div>

  <br><div class="mb-3 row">
  <label for="inputPrecio" class="col-sm-2 col-form-label">Precio de Venta</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputPrecio" min="0">
  </div>

  <br><div class="mb-3 row">
  <label for="inputDescripción" class="col-sm-2 col-form-label">Descripción</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputDescripcion">
  </div>

  <div class="container">
    <input type="button" value="ACTUALIZAR">
  </div>
  

  @stop