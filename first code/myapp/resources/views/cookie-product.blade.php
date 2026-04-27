<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter your prodcut</h2>
    <form method="POST" action="/set-cookie">
        @csrf
        <input type="text" name="Product" placeholder="Enter Product" required>
        <button type="submit"> Set Cookie</button>
    </form>
</body>
</html>