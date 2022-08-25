@extends('layouts.master') 
@section('title', 'Inicio')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>Bienvenido al Sistema de Gestión de Stock de Productos</i></h2>
  <hr>

  <h4><i>MENU PRINCIPAL</i></h4>
  <hr>

  <ul style="background-color:#E2AFF4">
    <a class="nav-link active" href="/menuProductos" target="_blank">PRODUCTOS</a>
    <a class="nav-link active" href="/menuCategorias" target="_blank">CATEGORÍAS</a>
    <a class="nav-link active" href="/menuSucursales" target="_blank">SUCURSALES</a>    
    <a class="nav-link active" href="/asignacion" target="_blank">Asignar productos a una sucursal</a>   
  </ul>
  

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

</body>

@stop