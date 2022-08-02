@extends('layouts.master')
@section('title', 'Sucursal')
  
@section('content')

<body style="background-color:#D2B48C">

  <h2><i>SUCURSALES</i></h2>
  
  <div align="center" class="mb-2 row">
    <label for="inputId" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputId">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputCiudad" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCiudad">
    </div>
  </div>

</body>

@stop