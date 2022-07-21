@extends('layouts.master')
@section('title', 'Consulta')

@section('content')

<h2>Consulta de Productos</h2>


<form method="get">
<h3>Selecciona la opción de búsqueda:</h3>
<br />
<input name="intereses" type="radio" value="rbipeliculas" />CÓDIGO
<br />

<input name="intereses" type="radio" value="rbilibros" />NOMBRE
<br />

<input name="intereses" type="radio" value="rbiinternet" />SUCURSAL
</form>

<br><h3>BÚSQUEDA</h3>

<div class="mb-3 row">
  <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputCodigo">
  </div>

  <br><div class="mb-3 row">
  <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputNombre">
  </div>

  <br><div class="mb-3 row">
  <label for="inputSucursal" class="col-sm-2 col-form-label">Sucursal</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputSucursal">
  </div>

  <div class="container">
    <input type="button" value="Resultado de la búsqueda">
  </div><br>

  @stop