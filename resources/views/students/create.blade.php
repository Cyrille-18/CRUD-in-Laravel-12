<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset=>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
    <title>Document</title>

</head>
<body>

<form method="POST" action="{{ route('students.store') }}">
    @csrf
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div>
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required>
    </div>
    <div>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" required>
    </div>
    <div>
        <label for="age">Âge:</label>
        <input type="number" name="age" id="age" required>
    </div>
    <div>
        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" id="telephone" required>
    </div>
    <button type="submit">Soumettre</button>
</form>
</body>
</html>
