<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'Usuario ou senha nao existe';
        }

        if($request->get('erro') == 2){
            $erro = 'Necessario realizar login para ter acesso a pagina';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' =>$erro]);
    }

    public function autenticar(Request $request){
        $regras = [
            'username' => 'required',
            'password' => 'required'
        ];

        $feedback = [
            'username.required' => 'O campo usuario eh obrigatorio',
            'password.required' => 'O campo senha eh obrigatorio'
        ];

        $request->validate($regras, $feedback);

        $username = $request->get('username');
        $password =  $request->get('password');


        $user = new User();
        $usuario = $user->where('username', $username)->where('password', $password)->get()->first();

        if(isset($usuario->username)){
            
            session_start();
            $_SESSION['username'] = $usuario->username;
            $_SESSION['name'] = $usuario->name;
            
            return redirect()->route('app.home');

        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.login');

    }
}
