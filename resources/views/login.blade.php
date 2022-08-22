@extends('layouts.master')
@section('title', 'Login')
  
@section('content')
  
<body style="background-color:#D2B48C">

  <h2><i>INGRESA TU LOGIN Y CLAVE DEL SISTEMA</i></h2>
  <hr>
  
  <div align="right" class="mb-2 row">
    <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario" required>
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" required>
    </div>
  </div></br>
  
  <div style="border:2px solid brown;
   border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
   background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">INGRESAR</a>
  </div>

  <div style="FONT-SIZE: 12pt; FONT-FAMILY: Arial" align="center">
    <a href="#">¿Olvidaste tu contraseña?</a>
  </div>

</body>

@stop