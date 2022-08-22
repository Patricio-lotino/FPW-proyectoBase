@extends('layouts.master')
@section('title', 'Baja')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>DAR DE BAJA UN PRODUCTO</i></h2>
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

  <div align="right" class="mb-2 row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre">
    </div>
  </div>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Dar de Baja</button>       
  </div></br>

  <h4 class="col-sm-12" align="center">Si desea eliminar el producto</h4>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Presione aquí</button>       
  </div></br>

<<<<<<< HEAD
  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>
=======
  <ul style="BORDER: rgb(128,128,128) 2px solid; FONT-SIZE: 12pt; FONT-FAMILY: Arial; 
         BACKGROUND-COLOR: #E2BAF1" align="center" class="col-sm-2">
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/inicio">Volver a inicio</a></font></li>
    <li><font color:"red"><a class="nav-link active" aria-current="page" href="/login">Salir del Sistema</a></font></li>
  </ul>
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac

</body>

@stop