<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/user">
        @crsf
        Username: <input type="text" name="username" value="{{old('username')}}">
        @error('username')
        <p style="color: red">{{$message}}</p>
        @enderror 
        <br>
        <br>
        
        Username: <input type="text" name="email" value="{{old('email')}}">
        @error('email')
        <p style="color: red">{{$message}}</p>
        @enderror 
        <br>
        <br>

        <button type="submit"><Submit/button>
    </form>
</body>
</html>