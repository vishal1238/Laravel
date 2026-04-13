<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST" action="/student/update/{{$student['id']}}">
        @csrf 
        @method('PUT')

        Name: <input type="text" name="name" value="{{$student['name']}}"><br>
        Email: <input type="text" name="email" value="{{$student['email']}}"><br>
        Age: <input type="number" name="age" value="{{$student['age']}}"><br>
        <button type="submit"> Update</button>
    </form>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red;">{{$error}}</p>
    @endforeach
@endif
</body>
</html>