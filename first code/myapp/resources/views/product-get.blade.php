<!DOCTYPE html>
<html>
<head>
    <title>Get Cookie</title>
</head>
<body>
    <h2>Stored Product</h2>

    @if($product)
        <p>Product Name: {{ $product }}</p>
    @else
        <p>No product cookie found</p>
    @endif

    <a href="/">Go Back</a>
</body>
</html>