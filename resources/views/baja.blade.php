@extends('layouts.master')
@section('title', 'Baja')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>DAR DE BAJA UN PRODUCTO</i></h2>
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

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Dar de Baja</button>       
  </div></br>

  <h4 class="col-sm-12" align="center">Si desea eliminar el producto</h4>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Presione aquí</button>       
  </div></br>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/menuProductos">Ir al Menú</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Ir a Inicio</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>


 </body>

@stop