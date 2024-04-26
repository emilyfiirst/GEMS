<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            dd('Redirecionamento após autenticação bem-sucedida');
            return redirect()->route('app.alunos');
        }
        

        // Autenticação falhou, redirecionar de volta para a página de login com uma mensagem de erro
        return back()->withErrors(['username' => 'Usuário ou senha incorretos.']);
    }

    public function showLoginForm()
    {
        return view('site.login');
    }
}
