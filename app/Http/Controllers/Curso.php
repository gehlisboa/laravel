<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show() {
        $cursos = [
            (Object) ['nome'=>'DS','periodo'=>'tarde'],
            (Object) ['nome'=>'ADM','periodo'=>'tarde'],
            (Object) ['nome' => 'ENG', 'periodo' => 'manhã'],
            (Object) ['nome' => 'MED', 'periodo' => 'noite'],
            (Object) ['nome' => 'BIO', 'periodo' => 'tarde'],
            (Object) ['nome' => 'MAT', 'periodo' => 'manhã'],
            (Object) ['nome' => 'FIS', 'periodo' => 'noite']
        ];

        return view('curso', compact('cursos'));
    }
}
