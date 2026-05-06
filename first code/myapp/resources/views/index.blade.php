<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/create">ADD Stduents</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Marks</th>
            <th>Action</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{$student-> id}}</td>
            <td>{{$student-> name}}</td>
            <td>{{$student-> course}}</td>
            <td>{{$student-> marks}}</td>

            <td>
                <a href="/edit/{{$student->id}}">EDIT</a>
                <a href="/delete/{{$student->id}}">DELETE</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>