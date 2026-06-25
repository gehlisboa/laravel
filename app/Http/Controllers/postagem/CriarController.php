<?php

namespace App\Http\Controllers\Postagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Postagem\Postagem;

class CriarController extends Controller
{
    public function create()
    {
        return view('postagem.criar_postagem');
    }

    public function store(Request $request)
    {
        Postagem::create([
            'Titulo'   => $request->Titulo,
            'Conteudo' => $request->Conteudo,
            'User'     => $request->User,
            'Imagem'   => $request->Imagem
        ]);

        return redirect()->route('criar-postagem');
    }
}
