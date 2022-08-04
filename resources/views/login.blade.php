@extends('layouts.master')
@section('title', 'Login')
  
@section('content')
  
<body style="background-color:#D2B48C">

  <h2><i>INGRESA TU LOGIN Y CLAVE DEL SISTEMA</i></h2>
  
  <div align="center" class="mb-2 row">
    <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario" required>
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" required>
    </div>
  </div></br>  

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #FFDEAD" align="center" class="col-sm-2">
  <li><font color:"red"><a href="/inicio">INGRESAR</a></font></li>
  </ul>

  <div align="center">
    <a href="#">¿Olvidaste tu contraseña?</a>
  </div>

</body>

@stop