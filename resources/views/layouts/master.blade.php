<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   
  @section('header')
<<<<<<< HEAD
  
    <div class="container-fluid text-center" style="background-color:#48D1CC">
       <h2>Software CLEAN 1.0</h2>
    </div>
=======
  <div class="container">
  <nav class="navbar" style="background-color:#EBDEF0">
  <div class="container-fluid text-center">
    <div class="navbar-brand"> 
      <h2>Software CLEAN 1.0</h2>
    </div>
    <form class="d-flex">
      <input class="form-control me-2" type="buscar" placeholder="Buscar" aria-label="Buscar">
      <button class="btn" style="background-color:#D27EF0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
        <hr>
  @show

    <div class="container text-center">
        @yield('content')
    </div>

  @section('footer')
<<<<<<< HEAD
  <hr><div class="cont">
    <h5 class="text-center">Distribuidora de Artículos de Aseo "El Limpiazo"</h5>
  </div>
  <div class="cont">
    <h6 class="text-center">Todos los derechos reservados</h6>
  </div>
=======
        <hr><h5 class="text-center">Distribuidora de Artículos de Aseo "El Limpiazo"</h5>
        <h6 class="text-center">Todos los derechos reservados</h6>
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac

  @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
  </body>
</html>