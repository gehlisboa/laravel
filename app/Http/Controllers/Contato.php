<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato extends Controller
{
    function contato(string $nome){
        echo "O nome do contato é: $nome";
    }
}

function contato(string $nome, string $sobrenome){
    echo "O nome do completo é: $nome $sobrenome";
}


function assunto(string $nome, string $sobrenome, string $assunto){
    echo "<h1>Contato: $nome $sobrenome <h1/>";
    echo $assunto;
}


