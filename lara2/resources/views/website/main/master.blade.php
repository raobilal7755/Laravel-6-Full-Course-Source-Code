<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <header class="bg-danger display-1 text-white d-flex justify-content-center align-items-center" style="height: 30vh;width:100%;">

        <a href="{{ url('/home') }}" class="text-white btn btn-dark btn-lg">Home</a>
        <a href="{{ url('/slider') }}" class="btn btn-primary btn-lg">Slider</a>
        <a href="{{ url('/gallery') }}" class="text-dark btn btn-warning btn-lg">Gallery</a>
        <a href="{{ url('/portfolio') }}" class="text-white btn btn-secondary btn-lg">Portfolio</a>
       
    </header>

    @section('slider')
        
    @show
    @section('gallery')
        
    @show
    @section('portfolio')
        
    @show







    <section class="bg-primary text-white d-flex justify-content-center align-items-center" style="height: 60vh;width:100%;">
    
        <h1 class="display-1">Map</h1>
    
    </section>

    <section class="bg-dark text-white d-flex justify-content-center align-items-center" style="height: 30vh;width:100%;">
    
        <h1 class="display-1">Footer</h1>
    
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>