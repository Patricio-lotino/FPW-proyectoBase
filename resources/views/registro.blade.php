@extends('layouts.master')
@section('title', 'Registro')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>REGISTRO DE PRODUCTOS</i></h2>
  
  <div align="center" class="mb-2 row">
    <label for="inputId" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputId">
    </div>
  </div>

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
    <label for="inputCategoria" class="col-sm-2 col-form-label">Categoría</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCategoria">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputSucursal" class="col-sm-2 col-form-label">Nombre de Sucursal</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputSucursal">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputDescripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputDescripcion">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputCantidad" class="col-sm-2 col-form-label">Cantidad</label>
    <div class="col-sm-1">
      <input type="number" class="form-control" id="inputCantidad" min="0">
    </div>
  </div>

  <div align="center" class="mb-2 row">
    <label for="inputPrecio" class="col-sm-2 col-form-label">Precio de Venta</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="inputPrecio" min="0">
    </div>
  </div>

  <br><div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Registrar Producto</button>       
  </div></br>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>

</body>  

@stop