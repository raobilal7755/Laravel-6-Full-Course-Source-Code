<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
      
<div class="bg-danger p-5 text-white text-center display-3">
    {{$name}} <br>
    @foreach ($student as $item)
        {{$item }} <br>
    @endforeach
</div>






    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>