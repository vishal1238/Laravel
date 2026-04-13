<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Form</h2>

<!-- Success Message -->
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="/submit" method="POST">
    @csrf

    <!-- Name -->
    <label>Name:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br>
    @error('name')
        <span style="color:red;">{{ $message }}</span><br>
    @enderror

    <!-- Email -->
    <label>Email:</label><br>
    <input type="text" name="email" value="{{ old('email') }}"><br>
    @error('email')
        <span style="color:red;">{{ $message }}</span><br>
    @enderror

    <!-- Password -->
    <label>Password:</label><br>
    <input type="password" name="password"><br>
    @error('password')
        <span style="color:red;">{{ $message }}</span><br>
    @enderror

    <br>
    <button type="submit">Submit</button>
</form>

</body>
</html>