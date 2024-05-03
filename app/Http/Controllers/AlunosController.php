<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno; 

class AlunosController extends Controller
{
    public function index(){
        return view('app.aluno.index');
    } 

    public function listar(){
        return view('app.aluno.listar');
    }

    public function cadastrar(Request $request){
        if($request->input('_token') != ''){
           $regras = [
                'nome' => 'required|min:3|max:100',
                'cod_sgde' => 'required',
                'data_nascimento' => 'required',
                'numero_pasta' => 'required',

           ];

           $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'Deve ter no minimo 3 caracteres',
                'nome.max' => 'Deve ter no maximo 100 caracteres',
           ];

           $request->validate($regras, $feedback);

           $aluno = new Aluno();
           $aluno->create($request->all());
        }
        return view('app.aluno.cadastro');
    }
}
