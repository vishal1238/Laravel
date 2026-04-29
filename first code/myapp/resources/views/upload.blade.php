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
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Error -->
    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <!-- Upload Form -->
    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <br><br>
        <button type="submit">Upload</button>
    </form>

    <!-- Show the uploaded file -->
    @if(session('file'))
        <h3>Uploaded file:</h3>
        <img src="{{ asset('storage/' . session('file')) }}" width="200">
        <p>
            <a href="{{ asset('storage/' . session('file')) }}" target="_blank">View File</a>
        </p>
    @endif
</body>

</html>