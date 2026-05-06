<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add student</h2>
    <form action="/store" method="POST">
        @csrf
        Name: <input type="text" name="name"><br><br>

        Course: <input type="text" name="course"><br><br>

        Marks: <input type="number" name="marks"><br><br>

        <button type="submit">Save</button>

    </form>
</body>
</html>