<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Student Registeration Form</h2>
    <form method="POST" action="/student-form">
        @csrf

        <!-- //--Name--// -->
        Name: <input type="text" name="name" value="{{old('name}}">
        @error('name')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <br><br>

        <!-- //--Email--// -->
        Email: <input type="text" name="email" value="{{old('email}}">
        @error('email')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <br><br>

        <!-- //--Age--// -->
        Age: <input type="number" name="age" value="{{old('age}}">
        @error('age')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <br><br>

        <!-- //--Gender--// -->
        Gender: <input type="radio" name="gender" value="male" {{old('gender') == 'male' ? 'checked : ''}}>female
        @error('gender')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <br><br>


        <!-- //--Courses--// -->
        Courses:
        <select name="course">
            <option value="">-- Select Course --</option>
            <option value="B.Tech" {{ old('course') == 'B.Tech' ? 'selected' : '' }}>B.Tech</option>
            <option value="BCA" {{ old('course') == 'BCA' ? 'selected' : '' }}>BCA</option>
            <option value="MCA" {{ old('course') == 'MCA' ? 'selected' : '' }}>MCA</option>
            <option value="MBA" {{ old('course') == 'MBA' ? 'selected' : '' }}>MBA</option>
        </select>

        @error('course')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <!-- //--Hobbies--// -->
        Hobbies:<br>
        <input type="checkbox" name="hobbies[]" value="Reading"
            {{ is_array(old('hobbies')) && in_array('Reading', old('hobbies')) ? 'checked' : '' }}>
        Reading
        <input type="checkbox" name="hobbies[]" value="Gaming"
            {{ is_array(old('hobbies')) && in_array('Gaming', old('hobbies')) ? 'checked' : '' }}>
        Gaming
        <input type="checkbox" name="hobbies[]" value="Sports"
            {{ is_array(old('hobbies')) && in_array('Sports', old('hobbies')) ? 'checked' : '' }}>
        Sports
        <br>

        @error('hobbies')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>

        <!-- //--About--// -->
         <textarea name="about"> {{old('about')}}</textarea>
    </form>
</body>

</html>