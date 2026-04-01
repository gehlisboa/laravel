<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show() {
        $componentes = [
            (Object) ['nome'=>'PW','horario'=>'16:00'],
            (Object) ['nome'=>'PAM','horario'=>'12:00'],
            (Object) ['nome'=>'BD','horario'=>'10:00'],
            (Object) ['nome'=>'IA','horario'=>'14:00'],
            (Object) ['nome'=>'SO','horario'=>'08:00'],
            (Object) ['nome'=>'LP','horario'=>'18:00'],
            (Object) ['nome'=>'ES','horario'=>'20:00']
        ];

        return view('componente', compact('componentes'));
    }
}
