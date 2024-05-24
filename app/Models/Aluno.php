<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Aluno extends Model
{
    
    //use HasFactory;

    //use SoftDeletes;

    protected $table = 'alunos';
    protected $fillable = [
        'nome',
        'data_nascimento',
        'ativo',
        'numero_pasta',
        'certidao_nascimento',
        'historico',
        'cartao_sus',
        'doc_responsavel', 
        'comp_endereco',
        'doador_medula', 
        'doador_sangue'
    ];

    public $timestamps = false;
}

