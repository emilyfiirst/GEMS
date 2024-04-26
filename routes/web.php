<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlunosController;

Route::get('/', function () {
    return view('welcome');
})->name('site.index');

Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');

// Rota para exibir o formulário de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('site.login');

// Rota para processar o envio do formulário de login
Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('auth');


Route::middleware('auth')->prefix('/app')->group(function() {
    Route::get('/alunos', [AlunosController::class, 'alunos'])->name('app.alunos');
    Route::get('/passivo', function() { return 'Passivo'; })->name('app.passivo');
});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
