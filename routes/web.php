<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/login', [LoginController::class, 'login'])->name('site.login');


Route::prefix('/app')->group(function() {
    Route::get('/alunos', function() { return 'Alunos'; })->name('app.alunos');
    Route::get('/passivo', function() { return 'Passivo'; })->name('app.passivo') ;
});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
