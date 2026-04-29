<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Upload File</h2>
    <!-- Show success message -->
    @if(session('success'))
    <p style="color: green;">{{session('success')}}</p>
    @endif

    <!-- Error  -->
    @if($error->any())
    <p style="color: red;">{{$error->first()}}</p>
    @endif
</body>

</html>