<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <p>Name: {{$student['name']}}</p>
    <p>Email: {{$student['email'] }}</p>
    <p>Course: {{ $student['course']}}</p>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>
