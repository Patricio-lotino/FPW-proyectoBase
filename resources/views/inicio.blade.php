@extends('layouts.master') 
@section('title', 'Inicio')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>Bienvenido al Sistema de Gestión de Stock de Productos</i></h2>
  <hr>

  <h4><i>¿Qué desea hacer?</i></h4></br>

  <div class="card text-center" style="background-color:#F0C4FF" ><br></div>

  <ul style="background-color:#E2AFF4" FONT-SIZE: 12pt>
    <ul><a class="nav-link active" aria-current="page" href="/actualiza">Actualizar los datos de un producto</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/asignacion">Asignar productos a una sucursal</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/baja">Dar de Baja</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/categoria">Ver Categorias de productos</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/consulta">Consultar productos</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/listado">Listar productos</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/registro">Registrar un producto</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/sucursal">Ver Sucursales</a></ul>
  </ul> 

  </div>
  
  <div>
    <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <ul><font color:"red"><a class="nav-link active" aria-current="page" href="/login">SALIR</a></font></ul>
    </ul>
  </div>
</body>

@stop