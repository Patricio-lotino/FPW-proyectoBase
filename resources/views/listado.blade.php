@extends('layouts.master') 
@section('title', 'listado')

@section('content')

<body style="background-color:#D2B48C">

<h2><i>Listado de Productos</i></h2>
<hr>

@foreach($listado as $productos)
    <p>{{ $productos }}</p>
@endforeach

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
  <a href="{{ route('agregarproducto') }}" class="btn btn-sucess">Agregar Producto</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Volver a inicio</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

  </body>

@stop


