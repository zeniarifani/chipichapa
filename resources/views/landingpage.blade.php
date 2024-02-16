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
        <h1>Admin Validation</h1>
        <ul>
            <li><a href=""><img src="/image/koala.png" alt"" ></a></li>
            <li><a href=""></a>Home</li>
            <li><a href=""></a>FAQ</li>
            <li><a href=""></a>About Us</li>
            <li><a href=""></a>Contact Us</li>
        </ul>
    </nav>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

     <form action="{{ route('adminpassword') }}" method="post">
        @csrf
        <div class="row justify-content-center">
        <div class="col-md-6">
        <label for="password">Admin only Password:</label>
        <input type="password" id="password" name="adminpassword">
        <button type="submit">Login</button>
        </div>
        </div>
    </form>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>