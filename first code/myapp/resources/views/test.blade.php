<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/test">
        @csrf
        Enter Name: <input type="text" name="name">
        @error('name')
        <p style="color: red;">{{$message}}</p>
        <button type="submit">submit</button>
    </form>
</body>
</html>