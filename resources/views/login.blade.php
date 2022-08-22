@extends('layouts.master')
@section('title', 'Login')
  
@section('content')
  
<body style="background-color:#EBDEF0">
<div class="container text-center">
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

<<<<<<< HEAD
  <div style="FONT-SIZE: 12pt; FONT-FAMILY: Arial" align="center">
    <a href="#">¿Olvidaste tu contraseña?</a>
=======
  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
  <ul><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">INGRESAR</a></font></ul>
  </ul>

  <div align="center">
    <a  class="nav-link active" aria-current="page" href="#">¿Olvidaste tu contraseña?</a>
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
  </div>

</body>

@stop