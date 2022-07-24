<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>CRUDE Eloquent orm</title>
</head>
<body>
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-6">
    <form action="" method="POST">
        @csrf 
        
        <div class="mb-3">
            <label for="name"class="form-label">NAME</label>
            <input type="text" class="form-control"id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="city"class="form-label">CITY</label>
            <input type="text" class="form-control"id="city" name="city">
        </div>
        <div class="mb-3">
            <label for="marks"class="form-label">MARKS</label>
            <input type="number" class="form-control"id="marks" name="marks">
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    @if (session()->has('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
  </div>
  <div class="col-sm-6">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">CITY</th>
                <th scope="col">MARKS</th>
                <th scope="col">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $stu)
            <tr>
                <th>{{$stu->id}}</th>
                <th>{{$stu->name}}</th>
                <th>{{$stu->city}}</th>
                <th>{{$stu->marks}}</th>
                <td>
                    <a href="{{ url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a href="{{ url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
  </div>  
  

    

  </div>
  </div>

 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>   
</body>
</html>