<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passivo; 
use App\Models\Aluno; 


class PassivoController extends Controller
{
    public function index(){
        return view('app.passivo.index');
    }

    public function listar(Request $request){
        $alunos = Aluno::all(); 
        $passivos = Passivo::where('nome', 'like', '%'.$request->input('nome').'%')
        ->paginate(10);

        return view('app.passivo.listar', ['passivos' => $passivos, 'alunos' => $alunos]);
    }

    public function cadastrar(Request $request){
        $alunos = Aluno::all();

       
        if($request->input('_token') != ''){
           $regras = [
           ];

           $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'Deve ter no minimo 3 caracteres',
                'nome.max' => 'Deve ter no maximo 100 caracteres',
           ];

           $request->validate($regras, $feedback);

        if ($request->filled('id')) {
            $passivo = Passivo::find($request->input('id'));
            $update = $passivo->update($request->all());
        } else {
            $passivo = new Passivo();
            $passivo->create($request->all());
        }
        }
        return view('app.passivo.cadastro', ['alunos' => $alunos,]);
        //return view('app.passivo.cadastro');
    }

    public function editar($id){

        $passivo = Passivo::find($id);
        $alunos = Aluno::all();
        
        return view('app.passivo.cadastro', ['passivo' => $passivo, 'alunos' => $alunos]);
    }

    public function excluir($id){
        $passivo = Passivo::find($id);
        $alunoNome = $passivo->nome;
        $passivo->delete();
        return redirect()->route('app.passivo')->with('success', "O passivo $alunoNome foi excluído com sucesso.");
    }
}
