@extends('layouts.master') 
@section('title', 'Baja')

@section('content')

<body style="background-color:#D2B48C">

  <h2><i>DAR DE BAJA UN PRODUCTO</i></h2>

  <div align="center" class="mb-2 row">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Ingrese el Código</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputCodigo" placeholder="Código" required>
    </div>  
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Buscar</button>       
  </div></br>

  <div align="center" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Dar de Baja</button>       
  </div></br>

  <h4 class="col-sm-3" align="center">Si desea eliminar el producto</h4>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Presione aquí</button>       
  </div></br>

  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #ADFF2F" align="center" class="col-sm-2">
    <li><font color:"red"><a href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a href="/login">Salir del Sistema</a></font></li>
  </ul>

</body>

@stop