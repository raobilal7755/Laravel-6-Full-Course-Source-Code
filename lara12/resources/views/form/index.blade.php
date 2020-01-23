<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
      
    <h1 class="bg-danger text-white text-center p-4">Laravel Form Validation Method 1</h1>

    {{-- for errors --}}

   





    <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('sms'))
            <div class="alert alert-success">
              {{session()->get('sms')}}
            </div>
        @endif

      
        <form action="submitform" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="" class="text-warning">Username :</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" >
            </div>
            <div class="form-group">
              <label for="" class="text-warning">Email :</label>
              <input type="text" name="email" id="" class="form-control" placeholder="Enter your Email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
              <label for="" class="text-warning">Password :</label>
              <input type="text" name="pass" id="" class="form-control" placeholder="Enter your password" value="{{ old('pass') }}" >
            </div>
            <br>
            <input type="submit" value="Submit Form" class="btn btn-warning btn-lg">
        </form>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>