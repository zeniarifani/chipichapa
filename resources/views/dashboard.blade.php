<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "{{ asset('css/dashboardpage.css') }}">
    <title>PT ChipiChapa</title>
</head>
<body>
    <nav>
        <h1>Dasboard Employee Data</h1>
        <ul>
            <li><a><img src="/image/koala.png" alt"" ></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="{{route('addpage')}}">Add Data</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>
    
    <div class="d-flex flex-row justify-content-center gap-5">
    @foreach ($users as $b)
    <div class="card" style="width:18rem;">
    <img src="{{Storage::url('public/profile_image/' . $b->profile_picture)}}" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">{{$b->name}}</h5>
        <p class="card-text">Phone Number: {{$b->phone}}</p>
        <p class="card-text">Age: {{$b->age}}</p>
        <p class="card-text">Address: {{$b->address}}</p>
      
        <form action="{{route('delete',$b->id)}}" method="post">
                @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" style="margin-right: 10px;">>Delete</button>
        </form>
        <a href="{{route('edit',$b->id)}}" class="btn btn-success" style="margin-right: 10px;">>Edit</a>
    </div>
    </div>
    @endforeach
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>