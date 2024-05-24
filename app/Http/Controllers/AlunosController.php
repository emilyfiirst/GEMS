<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno; 

class AlunosController extends Controller
{
    public function index(){
        return view('app.aluno.index');
    } 

    public function listar(Request $request){
        $alunos = Aluno::where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('id', 'like', '%'.$request->input('id').'%')
        ->where('data_nascimento', 'like', '%'.$request->input('data_nascimento').'%')
        ->where('ativo', 'like', '%'.$request->input('ativo').'%')
        ->where('numero_pasta', 'like', '%'.$request->input('numero_pasta').'%')
        ->where('certidao_nascimento', 'like', '%'.$request->input('certidao_nascimento').'%')
        ->where('historico', 'like', '%'.$request->input('historico').'%')
        ->where('cartao_sus', 'like', '%'.$request->input('cartao_sus').'%')
        ->where('doc_responsavel', 'like', '%'.$request->input('doc_resposavel').'%')
        ->where('comp_endereco', 'like', '%'.$request->input('comp_endereco').'%')
        ->where('doador_medula', 'like', '%'.$request->input('doador_medula').'%')
        ->where('doador_sangue', 'like', '%'.$request->input('doador_sangue').'%')
        ->paginate(10);

        return view('app.aluno.listar', ['alunos' => $alunos]);
    }

    public function cadastrar(Request $request){
        if($request->input('_token') != '') {
            $regras = [
                'nome' => 'required|min:3|max:100',
                'data_nascimento' => 'required',
                'numero_pasta' => 'required',
            ];
    
            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'Deve ter no mínimo 3 caracteres',
                'nome.max' => 'Deve ter no máximo 100 caracteres',
            ];
    
            $request->validate($regras, $feedback);
    
            if ($request->filled('id')) {
                $aluno = Aluno::find($request->input('id'));
                $update = $aluno->update($request->all());
            } else {
                $aluno = new Aluno();
                $aluno->create($request->all());
            }
        }
    
        return view('app.aluno.cadastro');
    }
    
    public function editar($id){

        $aluno = Aluno::find($id);
        

        return view('app.aluno.cadastro', ['aluno' => $aluno]);
    }

    public function excluir($id){
        $aluno = Aluno::find($id);
        $alunoNome = $aluno->nome;
        $aluno->delete();
        return redirect()->route('app.aluno')->with('success', "O aluno $alunoNome foi excluído com sucesso.");
    }
}
