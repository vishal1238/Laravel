<!DOCTYPE html>
<html>
<head>
    <title>Product Cookie</title>
</head>
<body>
    <h2>Enter Product Name</h2>

    <form method="POST" action="/set-product-cookie">
        @csrf
        <input type="text" name="product" placeholder="Enter product" required>
        <button type="submit">Set Product Cookie</button>
    </form>

    <br>
    <a href="/get-product-cookie">Get Product Cookie</a>
</body>
</html>