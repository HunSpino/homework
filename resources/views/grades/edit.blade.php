<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerkesztés</title>
</head>
<body>
<div>
          <p><a href="{{ route('grades.index') }}">Vissza a felsoroláshoz</a></p>
          <form method='POST' action="{{ route('grades.update', $grade->id) }}">
               @method('PATCH')
               @csrf
               <div>
                    <selection>Person:</selection><br>
                    <input type="text" name="person" value="{{ $grade->person }}">
                    @error('person')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection>Subject:</selection><br>
                    <input type="text" name="subject" value="{{ $grade->subject }}">
                    @error('subject')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection>Type:</selection><br>
                    <input type="text" name="type" value="{{ $grade->type }}">
                    @error('type')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection>Jegy:</selection><br>
                    <input type="number" name="grade" value="{{ $grade->grade }}">
                    @error('grade')
                         <p>{{ $message }}</p>
                    @enderror
                </div>
               <div>
                    <input type="submit" value="Edit">
               </div>
          </form>
     </div>

</body>
</html>
