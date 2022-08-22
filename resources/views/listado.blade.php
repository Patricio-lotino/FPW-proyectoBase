@extends('layouts.master') 
<<<<<<< HEAD
@section('title', 'listado')

@section('content')

<body style="background-color:#D2B48C">
=======
@section('title', 'Listado')

@section('content')

<body style="background-color:#EBDEF0">
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac

<h2><i>Listado de Productos</i></h2>
<hr>

@foreach($listado as $productos)
    <p>{{ $productos }}</p>
@endforeach

<<<<<<< HEAD
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


=======


<ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><a href="{{ route('agregarproducto') }}" class="btn btn-sucess">Agregar un producto</a></li>
    <li><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
</ul>

</body>

@stop
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
