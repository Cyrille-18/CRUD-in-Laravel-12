<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');


Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

