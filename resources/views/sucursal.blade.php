@extends('layouts.master')
@section('title', 'Sucursal')
  
@section('content')

<h2>SUCURSALES</h2>
  
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
  <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputCiudad">
  </div>
  </div>

  @stop