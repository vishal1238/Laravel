<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Social Media Login</h2>

    <form method="POST" action="/login">
        @csrf

        <input type="text" name="username" placeholder="Enter Username" required>
        <br>

        <input type="password" name="password" placeholder="Enter Password" required>
        <br>

        <button type="submit">Login</button>
    </form>
</body>
</html>