<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TurmaController;

/* Dashboard */
Route::get('/dashboard', function () {
    return view('dashboard', [
        'totalAlunos' => \App\Models\Aluno::count(),
        'totalCursos' => \App\Models\Curso::count(),
        'totalTurmas' => \App\Models\Turma::count()
    ]);
})->name('dashboard');

/* Rotas de Recursos */
Route::resource('alunos', AlunoController::class);
Route::resource('cursos', CursoController::class);
Route::resource('turmas', TurmaController::class);

/* Página Inicial */
Route::get('/', function () {
    return view('welcome');
});