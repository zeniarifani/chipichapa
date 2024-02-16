<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "{{ asset('css/addpage.css') }}">
    <title>PT ChipiChapa</title>
</head>
<body>
    <nav>
        <h1 style="font-family: cursive">Insert Data</h1>
        <ul>
            <li><a href=""><img src="/image/koala.png" alt"" ></a></li>
            <li><a href=""></a>Home</li>
            <li><a href=""></a>FAQ</li>
            <li><a href=""></a>About Us</li>
            <li><a href=""></a>Contact Us</li>
        </ul>
    </nav>
    
    <div class="container">
        <form action="{{route('update',$users->id)}}" method = "post" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            @method('patch')
            <h1 style="font-family: cursive">Edit Employee</h1>
            <div class="input-box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" style="width: 100%" placeholder="Type Name" value="{{$users->name}}">
                <img src="/image/person.png" alt="">
            </div>
            @error('name')
              <span class="error">{{ $message }}</span>
            @enderror
            <hr>
            <div class="input-box">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" style="width: 100%" placeholder="Input Age" value="{{$users->age}}">
                <img src="/image/age.png" alt="">
            </div>
            @error('age')
              <span class="error">{{ $message }}</span>
            @enderror
            <hr>
            <div class="input-box">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" style="width: 50%" placeholder="Input Phone Number" value="{{$users->phone}}">
                <img src="/image/phone.png" alt="">
            </div>
            @error('phone')
              <span class="error">{{ $message }}</span>
            @enderror
            <hr>
            <div class="input-box">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" style="width: 100%" placeholder="Type Address" value="{{$users->address}}">
                <img src="/image/house.png" alt="">
            </div>
            @error('address')
              <span class="error">{{ $message }}</span>
            @enderror
            <hr>
            <div class="input-box">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" style="width: 50%" placeholder="JPG/PNG">
                <img src="/image/profile_image.png" alt="">
            </div>
            @error('profile_picture')
              <span class="error">{{ $message }}</span>
            @enderror
            <hr>
            <button type="submit">INSERT DATA</button>
        </form>

    </div>
    <script src="{{ asset('js/addpage.js') }}"></script>
</body>
</html>