<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit Student</h2>

    <form action="/update/{{$student->id}}" method="POST">
        @csrf
        Name: <input type="text" name="name" value="{{$student->name}}"><br><br>

        Course: <input type="text" name="course" value="{{$student->course}}><br><br>

        Marks: <input type="number" name="marks" value="{{$student->marks}}><br><br>

        <button type="submit">Save</button>

    </form>
</body>

</html>