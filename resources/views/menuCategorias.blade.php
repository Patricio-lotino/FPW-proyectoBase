@extends('layouts.master') 

@section('title', 'Menu_Categorias')

@section('content')

<body style="background-color:#EBDEF0">

<h2><i>CATEGORÍAS</i></h2>
<hr>

  <a href='listadoCategoria' type="button" class="btn btn-success">Listar</a>
  <a href='registroCategoria' type="button" class="btn btn-success">Agregar</a>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Ir a Inicio</a>
  </div>
  
  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

  </body>

@stop