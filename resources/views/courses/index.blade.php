<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Abbreviation</th>
        <th>Name</th>
        <th>Type</th>
        <th>Nº Semesters</th>
        <th>Nº Places</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($courses as $course)
        <tr>
            <td>{{ $course->abbreviation }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->type }}</td>
            <td>{{ $course->semesters }}</td>
            <td>{{ $course->places }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
