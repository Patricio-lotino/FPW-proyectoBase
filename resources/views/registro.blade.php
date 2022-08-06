@extends('layouts.master')
@section('title', 'Registro')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>REGISTRO DE PRODUCTOS</i></h2>
  <hr>

<form method="post" action="{{ route('guardarproducto') }}">
  
  <div align="center" class="mb-2 row">
    <label for="codigo" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="codigo" name="codigo">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="categoria" class="col-sm-2 col-form-label">Categoría</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="categoria" name="categoria">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
  </div>

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

</body>  

@stop