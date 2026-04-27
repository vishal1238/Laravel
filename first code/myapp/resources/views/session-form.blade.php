<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter your name</h2>

    <form method="POST" action="/set-session">
        @csrf
        <input type="text" name="username" placeholder="Enter Name" required><br>
        <button type="submit"> Save Session</button>
    </form>
    <br>

    <a href="/get-session"> View Session</a>
</body>
</html>