@extends('layouts.master') 
@section('title', 'Inicio')

@section('content')

<body style="background-color:#D2B48C">

  <h2><i>Bienvenido al Sistema de Gestión de Stock de Productos</i></h2>
  <hr>

<div class="container">
  <div class="card text-center" style="background-color:#F0C4FF"><br>
    <h4><i>¿Qué desea hacer?</i></h4>
  <div class="card-header">
  </div>
  <ul style="background-color:#E2AFF4">
    <ul><a class="nav-link active" aria-current="page" href="/actualiza" target="_blank">Actualizar los datos de un producto</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/asignacion" target="_blank">Asignar productos a una sucursal</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/baja" target="_blank">Dar de Baja</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/categoria" target="_blank">Ver Categorias de productos</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/consulta" target="_blank">Consultar productos</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/listado" target="_blank">Listar productos</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/registro" target="_blank">Registrar un producto</a></ul>
    <ul><a class="nav-link active" aria-current="page" href="/sucursal" target="_blank">Ver Sucursales</a></ul>
  </ul>
  <div class="card-footer text-muted" style="background-color:#F0C4FF"><br>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

</body>

@stop