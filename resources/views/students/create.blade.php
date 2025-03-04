<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset=>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action="{{ route('students.store') }}">
        @csrf
        <div>
            <label id="name">Nom:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label id="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label id="age">Age</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <label id="telephone">Telephone</label>
            <input type="text" id="telephone" name="telephone">
        </div>
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
