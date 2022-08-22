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

<<<<<<< HEAD
  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>
=======
  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac

</body>

@stop