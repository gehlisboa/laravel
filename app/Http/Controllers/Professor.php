<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show() {
        $professores = [
            (Object) ['nome'=>'Diogo','cpf'=>'222.222.222-00'],
            (Object) ['nome'=>'Amauri','cpf'=>'333.333.333-00'],
            (Object) ['nome'=>'Mariana','cpf'=>'444.444.444-00'],
            (Object) ['nome'=>'Carlos','cpf'=>'555.555.555-00'],
            (Object) ['nome'=>'Fernanda','cpf'=>'666.666.666-00'],
            (Object) ['nome'=>'João','cpf'=>'777.777.777-00'],
            (Object) ['nome'=>'Ana','cpf'=>'888.888.888-00']
        ];

        return view('professor', compact('professores'));
    }
}
