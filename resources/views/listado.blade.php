@extends('layouts.master') 

@section('title', 'Listado')

@section('content')

<body style="background-color:#EBDEF0">

  <h2><i>LISTAR PRODUCTOS</i></h2>
  <hr>
  
  <form>

  <legend>Elige una opción de búsqueda</legend>
    <label>
      <input type="radio" name="opcion" value="código"> CÓDIGO
    </label>
    <label>
      <input type="radio" name="opcion" value="nombre"> NOMBRE
    </label>
    <label>
      <input type="radio" name="opcion" value="sucursal"> SUCURSAL
    </label>
    <label>
      <input type="radio" name="opcion" value="categoria"> CATEGORIA
    </label>
    <label>
      <input type="radio" name="opcion" value="estado"> ESTADO
    </label>

  </form></br>

  <div class="form-group">
    <button type="submit" style="background-color:#D27EF0" class="btn btn-lg">Buscar</button>       
  </div></br>

  <h4>Resultado de la consulta</h4> 

  <div style="text-align:center;">
  
	<table border="1" style="margin: 0 auto;">
		<tr>
			<th>Id</th>
			<th>Código</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Estado</th>
      <th>Categoría</th>
      <th>Sucursal</th>
      <th>Cantidad</th>
      <th>Precio</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
		</tr>
    <tr>
			<td></td>
			<td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
		</tr>
	</table>
    </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/menuProductos">Ir al Menú</a>
  </div>

  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/inicio">Ir a Inicio</a>
  </div>
  
  <div style="border:2px solid brown; border-radius:22px; FONT-SIZE: 12pt; FONT-FAMILY: Arial; background-color:#48D1CC" align="center" class="col-sm-2">
    <a href="/login">Salir del Sistema</a>
  </div>   

</body>

@stop