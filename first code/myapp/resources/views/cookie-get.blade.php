<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Store Cookie Value</h2>
    @if($name)
    <p>Welcome, {{$name}} </p>
    @else
    <p>No cookie found</p>
    @endif
    
    <a href="/">Go Back</a>
</body>
</html>