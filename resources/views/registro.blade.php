@extends('layouts.master')
  @section('title', 'Registro')
  
  @section('content')

Agregar  meta charset// 
<meta charset="UTF-8"> 

<h2>REGISTRO DE PRODUCTOS</h2>
  
<br><div class="mb-3 row">
  <label for="inputId" class="col-sm-2 col-form-label">Id</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputId">
  </div>

<br><div class="mb-3 row">
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
  <label for="inputCategoria" class="col-sm-2 col-form-label">Categoría</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputCategoria">
  </div>

<br><div class="mb-3 row">
  <label for="inputSucursal" class="col-sm-2 col-form-label">Sucursal</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputSucursal">
  </div>

<br><div class="mb-3 row">
  <label for="inputDescripción" class="col-sm-2 col-form-label">Descripción</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputDescripcion">
  </div>

<br><div class="mb-3 row">
  <label for="inputCantidad" class="col-sm-2 col-form-label">Cantidad</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputCantidad" min="0">
  </div>

<br><div class="mb-3 row">
  <label for="inputPrecio" class="col-sm-2 col-form-label">Precio de Venta</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputPrecio" min="0">
  </div>

  <br /><button type="submit" class="btn btn-primary">Registrar Producto</button>
  
  @stop