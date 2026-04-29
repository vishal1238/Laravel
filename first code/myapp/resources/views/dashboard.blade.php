<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to Dashboard</h2>

    @if(session('username'))
        <p>Username: {{ session('username') }}</p>
        <p>Password: {{ session('password') }}</p>
    @else
        <p>No session found</p>
    @endif

    <br>
    <a href="/logout">Logout</a>
</body>
</html>