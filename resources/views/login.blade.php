  @extends('layouts.master')
  
  @section('content')
  
  <h2>Ingresa tu login y clave del sistema</h2>
  
  <br><div class="mb-3 row">
    <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUsuario">
    </div><br>

  <br><div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>

    @stop