@extends('layouts.master')
@section('title', 'Categoria')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>CATEGORIA DE PRODUCTOS</i></h2>

  <div align="center" class="mb-2 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Ingrese el Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputCodigo" placeholder="Código" required>
    </div>  
  </div>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar la categoría</button>       
  </div></br>
  
  <div align="center" class="mb-2 row">
    <label for="inputId" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-2">
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
    <label for="inputDescripción" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control" id="inputDescripcion"></textarea>
    </div>
  </div></br>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>

</body>

@stop