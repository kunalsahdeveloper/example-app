<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>
    <ul>
        @foreach ($students as $id => $student)
            <li>
                <a href="{{ route('students.show', $id) }}">{{ $student['name'] }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
