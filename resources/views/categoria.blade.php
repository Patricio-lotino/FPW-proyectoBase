@extends('layouts.master')
@section('title', 'Categoria')
  
@section('content')

<h2>CATEGORIA DE PRODUCTOS</h2>
  
<br><div class="mb-3 row">
  <label for="inputId" class="col-sm-2 col-form-label">Id</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputId">
  </div>
  </div>

<br><div class="mb-3 row">
  <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputNombre">
  </div>
  </div>

<br><div class="mb-3 row">
  <label for="inputDescripción" class="col-sm-2 col-form-label">Descripción</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputDescripcion">
  </div>
  </div>

  @stop