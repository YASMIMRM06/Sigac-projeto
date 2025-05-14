@extends('template')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1><i class="bi bi-speedometer2 me-2"></i>Dashboard</h1>
        <span class="badge bg-primary">Atualizado em {{ now()->format('d/m/Y H:i') }}</span>
    </div>

    <div class="row g-4">
        <!-- Card Alunos -->
        <div class="col-md-4">
            <div class="card border-primary shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill text-primary display-4 mb-3"></i>
                    <h2 class="text-primary">{{ $totalAlunos }}</h2>
                    <p class="card-text">Alunos Cadastrados</p>
                    <a href="/alunos" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-list-ul"></i> Ver Todos
                    </a>
                </div>
            </div>
        </div>

        <!-- Card Cursos -->
        <div class="col-md-4">
            <div class="card border-success shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-book-fill text-success display-4 mb-3"></i>
                    <h2 class="text-success">{{ $totalCursos }}</h2>
                    <p class="card-text">Cursos Ativos</p>
                    <a href="/cursos" class="btn btn-outline-success btn-sm">
                        <i class="bi bi-list-ul"></i> Ver Todos
                    </a>
                </div>
            </div>
        </div>

        <!-- Card Turmas -->
        <div class="col-md-4">
            <div class="card border-info shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-collection-fill text-info display-4 mb-3"></i>
                    <h2 class="text-info">{{ $totalTurmas }}</h2>
                    <p class="card-text">Turmas Ativas</p>
                    <a href="/turmas" class="btn btn-outline-info btn-sm">
                        <i class="bi bi-list-ul"></i> Ver Todos
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection