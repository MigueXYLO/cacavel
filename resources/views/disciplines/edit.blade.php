<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discipline</title>
</head>
<body>
<h2>Update course "{{ $discipline->name }}"</h2>
<form method="POST" action="{{ route('disciplines.update', ['discipline' => $discipline]) }}">
    @csrf
    @method('PUT')
    @include('disciplines.shared.fields', ['readonlyData' => false])
    <div>
        <button type="submit" name="ok">Save course</button>
    </div>
</form>
</body>
</html>
