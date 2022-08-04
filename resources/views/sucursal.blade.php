@extends('layouts.master')
@section('title', 'Sucursal')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>SUCURSALES</i></h2>
  
  <div align="center" class="mb-2 row">
    <label for="inputId" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputId">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCiudad">
    </div>
  </div></br>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>

</body>

@stop