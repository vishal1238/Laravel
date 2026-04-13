<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Student details</h2>
    <form method="POST" action="/student">
        @csrf
        Name: <input type="text" name="name" placeholder="Enter your name"><br>
        Email: <input type="text" name="email" placeholder="Enter your email"><br>
        Age: <input type="number" name="age" placeholder="Enter your age"><br>

        <button type="submit">Submit</button>
    </form>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color: red;">{{$error}}</p>
    @endforeach
@endif
</body>

</html>