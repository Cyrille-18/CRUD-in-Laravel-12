<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // fonction qui affiche la vue du formulaire
    public function create()
    {
        return view('students.create');
    }

    // fonction qui va stocker le student dans la base de données
    public function store(Request $request)
    {
        dd($request->all());
    }
}
