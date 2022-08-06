@extends('layouts.master')
@section('title', 'Consulta')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>CONSULTA DE PRODUCTOS</i></h2>
  <hr>

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
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar</button>       
  </div></br>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>

</body>

@stop