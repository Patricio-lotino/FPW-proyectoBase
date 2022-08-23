@extends('layouts.master')
@section('title', 'Sucursal')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>SUCURSALES</i></h2>
  <hr>
  
  <div align="right" class="mb-2 row">
    <label for="inputId" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputId">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCiudad">
    </div>
  </div></br>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

</body>

@stop