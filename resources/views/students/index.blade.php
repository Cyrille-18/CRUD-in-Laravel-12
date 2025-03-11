<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Liste des étudiants</h1>
        <a href="{{ route('students.create') }}" class="btn-ajouter">+ Ajouter un étudiant</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Téléphone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->nom }}</td>
                    <td>{{ $student->prenom }}</td>
                    <td>{{ $student->age }}</td>
                    <td class="phone-number">{{ $student->telephone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
<?php
