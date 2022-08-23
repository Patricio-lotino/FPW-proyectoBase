@extends('layouts.master')
@section('title', 'Actualiza')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>ACTUALIZAR UN PRODUCTO</i></h2>
  <hr>

  <div align="right" class="mb-2 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Ingrese el Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputCodigo" placeholder="Código" required>
    </div>
  </div>  
    
  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar</button>       
  </div></br>

  <h4 class="col-sm-2" align="center">Datos</h4> 

  <div align="right" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="inputPrecio" class="col-sm-2 col-form-label">Precio de Venta</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="inputPrecio" min="0">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="inputDescripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputDescripcion">
    </div>
  </div>

  <h4 class="col-sm-2" align="center">Actualizar</h4> 
  
<form>
  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="precio" class="col-sm-2 col-form-label">Precio de Venta</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="precio" min="0" name="precio">
    </div>
  </div>

  <div align="right" class="mb-2 row">
    <label for="descripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
  </div>

</form>

  <div class="form-group">

    <button type="submit" class="btn btn-primary btn-lg">Guardar los cambios</button>       
  </div></br>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>   

</body>

@stop