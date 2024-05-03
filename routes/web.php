<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PassivoController;

Route::get('/', function () {
    return view('site.login');
})->name('site.index');

Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/login/', [LoginController::class, 'login'])->name('site.login');
//Route::get('/login/{erro?}', [LoginController::class, 'login'])->name('site.login');


Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');


Route::middleware('autenticacao:padrao,visitante,p3,p4')->prefix('/app')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
    Route::get('/aluno', [AlunosController::class, 'index'])->name('app.aluno');
    Route::get('/passivo', [PassivoController::class, 'index'])->name('app.passivo');


    Route::post('/aluno/listar', [AlunosController::class, 'listar'])->name('app.aluno.listar');
    Route::get('/aluno/cadastro', [AlunosController::class, 'cadastrar'])->name('app.aluno.cadastro');
    Route::post('/aluno/cadastro', [AlunosController::class, 'cadastrar'])->name('app.aluno.cadastro');

});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
