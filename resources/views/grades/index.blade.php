<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statues</title>
</head>
<body>
    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>
<table>
        <tr>
            <th>Person</th>
            <th>Subject</th>
            <th>Type</th>
            <th>Grade</th>
        </tr>
    @foreach ($grades as $grade)
        <tr>
            <td>
                <a href="{{ route('grades.show', $grade->id) }}">{{ $grade->person }}</a>
            </td>
            <td>{{ $grade->subject }}</td>
            <td>{{ $grade->type }}</td>
            <td>{{ $grade->grade }}</td>
        </tr>
    @endforeach
    </table>
    <div>
        <button>Új adat</button>
    </div>
</body>
</html>
