<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter your name</h2>
    <form method="POST" action="/set-cookie">
        @csrf
        <input type="text" name="name" placeholder="Enter name" required>
        <button type="submit"> Set Cookie</button>
    </form>
    <br>
    <a href="/get-cookie">Get Cookie</a>
    <br>
    <a href="/delete-cookie">Delete Cookie</a>

</body>
</html>