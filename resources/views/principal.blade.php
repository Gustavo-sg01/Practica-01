<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>ALbum</title>
  </head>
  <body style="background-color:#E2DDDC  ;">
  
  <nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
      <p class="text-center"><h1>Proyecto 5.6  </h1> </p>
      <p class="text-center"><h1>Bienvenidos  </h1> </p>
  </span>
  </nav>
   
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
  </div>
  
  <br>
   <div class="btn-group btn-group-toggle">
   
   <div class="container">
     <a href="{{route('foto')}}" class="btn btn-primary btn-lg active">Fotos</a>
   </div>

   <div class="container">
     <a href="{{route('blogs')}}" class="btn btn-primary btn-lg active ">Noticia</a>
   </div>

   <div class="container">
     <a href="{{route('nosotros')}}" class="btn btn-primary btn-lg active">Nosotros</a>
   </div>
   
   </div>
   
  

  <div class="container">
      @yield('seccion')   

</div>
  
<div class="p-3 mb-2 bg-dark text-white"></div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
