@extends('layouts.master') 
@section('title', 'Listado')

@section('content')

<body style="background-color:#EBDEF0">

<h2><i>Listado de Productos</i></h2>
<hr>

@foreach($listado as $productos)
    <p>{{ $productos }}</p>
@endforeach



<ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><a href="{{ route('agregarproducto') }}" class="btn btn-sucess">Agregar un producto</a></li>
    <li><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
</ul>

</body>

@stop