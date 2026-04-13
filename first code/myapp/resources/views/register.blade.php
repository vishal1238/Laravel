<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register Page</h2>
    <form method="POST" action="/register">
        @csrf 
        <!-- @method('PUT') -->

        Name: <input type="text" name="name" value="{{ old('name') }}"><br>
        Email: <input type="text" name="email" value="{{old('email')}}"><br>
        Password: <input type="password" name="password" value="{{old('password')}}"><br>
        phone: <input type="text" name="phone" value="{{old('phone')}}"><br><br>
        <button type="submit">submit</button>
    </form>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red;">{{$error}}</p>
    @endforeach
@endif
</body>
</html>