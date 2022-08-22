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
  
    <div class="container-fluid text-center" style="background-color:#48D1CC">
       <h2>Software CLEAN 1.0</h2>
    </div>
        <hr>
  @show

    <div class="container">
        @yield('content')
    </div>

  @section('footer')
  <hr><div class="cont">
    <h5 class="text-center">Distribuidora de Artículos de Aseo "El Limpiazo"</h5>
  </div>
  <div class="cont">
    <h6 class="text-center">Todos los derechos reservados</h6>
  </div>

  @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>