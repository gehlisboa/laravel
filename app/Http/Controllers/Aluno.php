<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show() {
        $alunos = [
            (Object) ['nome'=>'Geovanna','telefone'=>'123','email'=>'g@gmail.com'],
            (Object) ['nome'=>'Victoria','telefone'=>'456','email'=>'v@gmail.com'],
            (Object) ['nome'=>'Ketilyn','telefone'=>'789','email'=>'k@gmail.com'],
            (Object) ['nome'=>'Lucas','telefone'=>'321','email'=>'l@gmail.com'],
            (Object) ['nome'=>'Mariana','telefone'=>'654','email'=>'m@gmail.com'],
            (Object) ['nome'=>'João','telefone'=>'987','email'=>'j@gmail.com'],
            (Object) ['nome'=>'Ana','telefone'=>'147','email'=>'a@gmail.com'],
            (Object) ['nome'=>'Pedro','telefone'=>'258','email'=>'p@gmail.com'],
        ];

        return view('aluno', compact('alunos'));

    function add($nome, $telefone, $email) {
        return (Object) ['nome' => $nome, 'telefone' => $telefone, 'email' => $email];
    }

    $alunos[] = $this->add('Carlos', '369', 'c@gmail.com');
    }

}
