@extends('layouts.master')
@section('title', 'Baja')

@section('content')

Agregar  meta charset// 
  <meta charset="UTF-8"> 

<h2>DAR DE BAJA UN PRODUCTO</h2>

<h4>Ingrese el código del producto para dar de Baja</h4>

<div class="mb-3 row">
  <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputCodigo">
  </div>

<br /><button type="submit" class="btn btn-primary">Dar de baja</button>
</div>

<h4>SI DESEA ELIMINAR EL PRODUCTO SELECCIONADO</h4> 

<button type="submit" class="btn btn-primary">Dar de baja</button>
<br /></div>
on" value="ELIMINAR">
</div>

@stop