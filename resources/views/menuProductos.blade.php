@extends('layouts.master') 

@section('title', 'Menu_Productos')

@section('content')

<body style="background-color:#EBDEF0">

<h2><i>PRODUCTOS</i></h2>
<hr>

  <a href='listado' class="btn btn-success">Listar</a>
  <a href='registro'class="btn btn-success">Agregar</a>
  <a href='actualiza' class="btn btn-success">Modificar</a>
  <a href='baja' class="btn btn-success">Dar de Baja/Eliminar</a>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Ir a Inicio</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

  </body>

@stop