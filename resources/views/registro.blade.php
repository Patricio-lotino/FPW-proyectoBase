@extends('layouts.master')
@section('title', 'Registro')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>REGISTRO DE PRODUCTOS</i></h2>
  <hr>
<<<<<<< HEAD
  
<form method="post" action="{{ route('guardarproducto') }}">

  <div align="right" class="mb-2 row">
=======

<form method="post" action="{{ route('guardarproducto') }}">
  
  <div align="center" class="mb-2 row">
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
    <label for="codigo" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="codigo" name="codigo">
    </div>
  </div>

<<<<<<< HEAD
  <div align="right" class="mb-2 row">
=======
  <div align="center" class="mb-2 row">
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>

<<<<<<< HEAD
  <div align="right" class="mb-2 row">
=======
  <div align="center" class="mb-2 row">
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
    <label for="categoria" class="col-sm-2 col-form-label">Categoría</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="categoria" name="categoria">
    </div>
  </div>

<<<<<<< HEAD
  <div align="right" class="mb-2 row">
    <label for="descripción" class="col-sm-2 col-form-label">Descripción</label>
=======
  <div align="center" class="mb-2 row">
    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
    <div class="col-sm-8">
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
  </div>

<<<<<<< HEAD
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
=======
  <div align="center" class="mb-2 row">
    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="cantidad" min="0" name="cantidad">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="precio" class="col-sm-2 col-form-label">Precio de Venta</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="precio" min="0" name="precio">
    </div>
  </div>
  
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Registrar Producto</button>       
    
</form>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac

  </form>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

  </body>  

@stop