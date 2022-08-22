@extends('layouts.master')
@section('title', 'Registro')
  
@section('content')

<body style="background-color:#D2B48C">

  <h2><i>REGISTRO DE PRODUCTOS</i></h2>
  <hr>
  
<form method="post" action="{{ route('guardarproducto') }}">

  <div align="right" class="mb-2 row">
    <label for="codigo" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="codigo" name="codigo">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="categoria" class="col-sm-2 col-form-label">Categoría</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="categoria" name="categoria">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="descripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="cantidad" min="0" name="cantidad">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="precio" class="col-sm-2 col-form-label">Precio de Venta</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="precio" min="0" name="precio">
    </div>
  </div>

  <br><div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Guardar</button>       
  </div></br>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif  

  </form>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

  </body>  

@stop