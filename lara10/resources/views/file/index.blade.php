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
      
    <table class="table table-bordered text-white">
        <thead>
            <tr class="bg-danger text-white">
              <th>ID</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Email</th>
              <th>Password</th>
              <th>Address</th>
              <th>Image</th>
              <th>City</th>
              <th>Company</th>
              <th>Phone_no</th>
              <th>Postal_code</th>
              <th>Created_at</th>
              <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach ($data as $std)
            <tr>
                <td>{{$std->id}}</td>
                <td>{{$std->fname}}</td>
                <td>{{$std->lname}}</td>
                <td>{{$std->email}}</td>
                <td>{{$std->password}}</td>
                <td>{{$std->address}}</td>
                <td>{{$std->image}}</td>
                <td>{{$std->city}}</td>
                <td>{{$std->company}}</td>
                <td>{{$std->phone_no}}</td>
                <td>{{$std->postal_code}}</td>
                <td>{{$std->created_at}}</td>
                <td>{{$std->updated_at}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center align-items-center">
      <div>
        {{$data->links()}}
      </div>
    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>