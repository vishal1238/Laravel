<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<h2>Simple Form</h2>

<form action="{{ route('form.submit') }}" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name">
    <span style="color:red">
        @error('name') {{ $message }} @enderror
    </span>
    <br><br>

    <label>Email:</label>
    <input type="text" name="email">
    <span style="color:red">
        @error('email') {{ $message }} @enderror
    </span>
    <br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>