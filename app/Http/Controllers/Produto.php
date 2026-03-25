<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function listar(){
        $produtos = [
            "produto1" => ["id"=>1, "nome"=>"computador", "preco"=>2000],
            "produto2" => ["id"=>2, "nome"=>"teclado", "preco"=>150],
            "produto3" => ["id"=>3, "nome"=>"mouse", "preco"=>80],
            "produto4" => ["id"=>4, "nome"=>"monitor", "preco"=>900],
            "produto5" => ["id"=>5, "nome"=>"impressora", "preco"=>600],
            "produto6" => ["id"=>6, "nome"=>"notebook", "preco"=>3500],
            "produto7" => ["id"=>7, "nome"=>"tablet", "preco"=>1200],
            "produto8" => ["id"=>8, "nome"=>"smartphone", "preco"=>2500],
            "produto9" => ["id"=>9, "nome"=>"headset", "preco"=>200],
            "produto10" => ["id"=>10, "nome"=>"webcam", "preco"=>300],
            "produto11" => ["id"=>11, "nome"=>"microfone", "preco"=>400],
            "produto12" => ["id"=>12, "nome"=>"caixa de som", "preco"=>350],
            "produto13" => ["id"=>13, "nome"=>"HD externo", "preco"=>500],
            "produto14" => ["id"=>14, "nome"=>"SSD", "preco"=>450],
            "produto15" => ["id"=>15, "nome"=>"roteador", "preco"=>250],
            "produto16" => ["id"=>16, "nome"=>"switch", "preco"=>300],
            "produto17" => ["id"=>17, "nome"=>"placa de vídeo", "preco"=>1800],
            "produto18" => ["id"=>18, "nome"=>"memória RAM", "preco"=>350],
            "produto19" => ["id"=>19, "nome"=>"processador", "preco"=>1200],
            "produto20" => ["id"=>20, "nome"=>"fonte", "preco"=>400],
            "produto21" => ["id"=>21, "nome"=>"gabinete", "preco"=>350]
        ];

        return view('estoque', ["produtos"=>$produtos]);
    }

}


