<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function alunos(){
        return view('app.alunos');
    } 
}
