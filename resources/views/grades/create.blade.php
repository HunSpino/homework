<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új adat</title>
</head>
<body>
    <h1>Új osztályzás</h1>
    <p><a href="{{ route('grades.index') }}">Vissza a felsorolásra</a></p>
    <form method='POST' action="{{ route('grades.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Person:<br>
            <input type="text" name="person">
        </div>
        <div>
            Subject:<br>
            <input type="text" name="subject">
        </div>
        <div>
            Type:<br>
            <input type="text" name="type">
        </div>
        <div>
            Grade:<br>
            <input type="number" name="grade">
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
