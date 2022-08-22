@extends('layouts.master')
@section('title', 'Asignación')

@section('content')

<body style="background-color:#D2B48C">

  <h2><i>ASIGNAR PRODUCTOS A LAS SUCURSALES</i></h2>
  <hr>

  <div align="right" class="mb-2 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Ingrese el Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputCodigo" placeholder="Código" required>
    </div>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Buscar</button>       
  </div></br>

  <div align="right" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <h4 class="col-sm-3" align="center">Cantidad de productos</h4>

  <div align="right" class="mb-2 row">
    <label for="inputPlayaBlanca" class="col-sm-2 col-form-label">Sucursal Playa Blanca</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="inputPlayaBlanca" min="0">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="inputElCorralero" class="col-sm-2 col-form-label">Sucursal El Corralero</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="inputElCorralero" min="0">
    </div>
  </div>

  <div align="right" class="mb-3 row">
    <label for="inputCampoLindo" class="col-sm-2 col-form-label">Sucursal Campo Lindo</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="inputCampoLindo" min="0">
    </div>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>
  
@stop