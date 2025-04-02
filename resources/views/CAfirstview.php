create a two view one showing Student list having list ancor tag of student. on clicking on student name it should redirect to another view showing student detail.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

