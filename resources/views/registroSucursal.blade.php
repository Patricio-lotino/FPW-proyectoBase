@extends('layouts.master')
@section('title', 'Registro_Sucursal')
  
@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>REGISTRO DE SUCURSALES</i></h2>
  <hr>
  
<form>

  <div align="right" class="mb-2 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div> 

  <div align="right" class="mb-2 row">
    <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="ciudad" name="ciudad">
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

 </form>

 <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/menuSucursales">Ir al Menú</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Ir a Inicio</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>

  </body>  

@stop