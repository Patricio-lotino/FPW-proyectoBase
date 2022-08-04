@extends('layouts.master')
@section('title', 'Asignación')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>ASIGNAR PRODUCTOS A LAS SUCURSALES</i></h2>

  <div align="center" class="mb-2 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Ingrese el Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputCodigo" placeholder="Código" required>
    </div>
  </div>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar</button>       
  </div></br>

  <div align="center" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <h4 class="col-sm-3" align="center">Cantidad de productos</h4>

  <div align="center" class="mb-2 row">
    <label for="inputPlayaBlanca" class="col-sm-2 col-form-label">Sucursal Playa Blanca</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="inputPlayaBlanca" min="0">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputElCorralero" class="col-sm-2 col-form-label">Sucursal El Corralero</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="inputElCorralero" min="0">
    </div>
  </div>

  <div align="center" class="mb-3 row">
    <label for="inputCampoLindo" class="col-sm-2 col-form-label">Sucursal Campo Lindo</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="inputCampoLindo" min="0">
    </div>
  </div>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>

</body>
  
@stop