@extends('layouts.master')
@section('title', 'Consulta')

@section('content')

<body style="background-color:#D2B48C">

  <h2><i>CONSULTA DE PRODUCTOS</i></h2>

  <form>

  <legend>Elige una opción de búsqueda</legend>
    <label>
      <input type="radio" name="opcion" value="código"> CÓDIGO
    </label>
    <label>
      <input type="radio" name="opcion" value="nombre"> NOMBRE
    </label>
    <label>
      <input type="radio" name="opcion" value="sucursal"> SUCURSAL
    </label>

  </form></br>

  <h4 class="col-sm-4" align="center">Ingrese el criterio de búsqueda</h4>

  <div align="center" class="mb-2 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputCodigo">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputDescripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputDescripcion">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputSucursal" class="col-sm-2 col-form-label">Sucursal</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputSucursal">
    </div>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Buscar</button>       
  </div>

</body>

@stop