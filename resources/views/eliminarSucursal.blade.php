@extends('layouts.master')
@section('title', 'Eliminar_Sucursal')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>ELIMINAR SUCURSAL</i></h2>
  <hr>

  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Ingrese el Nombre</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="nombre" placeholder="nombre" required>
    </div>  
  </div>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar</button>       
  </div></br>

  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="ciudad">
    </div>
  </div>

  <h4 class="col-sm-12" align="center">Si desea eliminar la Sucursal</h4>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Presione aquí</button>       
  </div></br>

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