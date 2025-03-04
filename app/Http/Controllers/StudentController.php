<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // fonction qui affiche la vue du formulaire
    public function create()
    {
        return view('students.create');
    }

    // fonction qui va stocker le student dans la base de données
    // Stocke les données du formulaire dans la base de données
    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'telephone' => 'required|string|max:20',
        ]);

        // Insérer dans la base de données
        Student::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'telephone' => $request->telephone,
        ]);

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Étudiant ajouté avec succès !');
    }
}
