<?php

namespace App\Http\Controllers\Postagem;

use App\Http\Controllers\Controller;

class ListarController extends Controller
{
    public function index()
    {
        $postagens = collect([
            (object)[
                'CodPostagem' => 1,
                'Titulo' => 'Primeira Postagem',
                'Conteudo' => 'Conteúdo de teste para visualizar o layout.',
                'User' => 'Geovanna',
                'Imagem' => 'https://picsum.photos/600/400'
            ],
            (object)[
                'CodPostagem' => 2,
                'Titulo' => 'Segunda Postagem',
                'Conteudo' => 'Mais um post de exemplo.',
                'User' => 'Victoria',
                'Imagem' => 'https://picsum.photos/600/401'
            ]
        ]);

        return view('postagem.listar_postagem', compact('postagens'));
    }
}
