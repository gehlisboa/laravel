<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    function index () {
        return view('aluno.index');
    }

    function add (Request $dados) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

       $alunos = \App\Models\AlunoModel::all();


        return view('aluno.index', ['sucesso'=>'Aluno Cadastrado!', 'alunos' =>$alunos]);
    }

    function remove(Request $dados) {}

    function edit(Request $dados) {}

    function list() {}
}
