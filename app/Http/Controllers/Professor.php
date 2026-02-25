<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function login(){
        echo 'Professor se conectou';
    }

    function logout(){
        echo 'O professor foi desconectado';
    }

    function consultarNotas(){
        echo 'Lista de notas carregadas com sucesso';
    }

    
}


