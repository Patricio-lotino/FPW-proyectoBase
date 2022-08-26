@extends('layouts.master')
@section('title', 'Asignar_Prod_Sucursal')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>ASIGNAR PRODUCTOS A LAS SUCURSALES</i></h2>
  <hr>

  <div align="right" class="mb-2 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Ingrese el Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputCodigo" placeholder="Código" required>
    </div>
  </div>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar</button>       
  </div></br>

  <div align="right" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>
  
  <form>

  <h4 class="col-sm-3" align="center">Cantidad de productos</h4>

  <div align="right" class="mb-2 row">
    <label for="playaBlanca" class="col-sm-2 col-form-label">Sucursal Playa Blanca</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="playaBlanca" name='playaBlanca' min="0">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="elCorralero" class="col-sm-2 col-form-label">Sucursal El Corralero</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="elCorralero" name='elCorralero' min="0">
    </div>
  </div>

  <div align="right" class="mb-3 row">
    <label for="campoLindo" class="col-sm-2 col-form-label">Sucursal Campo Lindo</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="campoLindo" name='campoLindo' min="0">
    </div>
  </div>

  <br>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Guardar</button>       
  </div></br>

</form>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/menuSucursales">Ir al Menú</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Ir a Inicio</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

</body>

@stop