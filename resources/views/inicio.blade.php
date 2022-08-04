@extends('layouts.master') 
@section('title', 'Inicio')

@section('content')

<body style="background-color:#D2B48C">

  <h2><i>Bienvenido al Sistema de Gestión de Stock de Productos</i></h2>

  <h4><i>¿Qué desea hacer?</i></h4></br>

  <ul style="background-color:#BDB76B" class="col-sm-4">
    <li><a href="/actualiza">Actualizar los datos de un producto</a></li>
    <li><a href="/asignacion">Asignar productos a una sucursal</a></li>
    <li><a href="/baja">Dar de Baja</a> </li>
    <li><a href="/categoria">Ver Categorias de productos</a></li>
    <li><a href="/consulta">Consultar productos</a></li>
    <li><a href="/registro">Registrar un producto</a></li>
    <li><a href="/sucursal">Ver Sucursales</a></li>
  </ul>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #FFDEAD" align="center" class="col-sm-2">
  <li><font color:"red"><a href="/login">SALIR</a></font></li>
  </ul>

</body>

@stop