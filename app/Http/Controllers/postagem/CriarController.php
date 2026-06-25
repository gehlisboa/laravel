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
        'Titulo'   => $request->input('titulo'),
        'Conteudo' => $request->input('conteudo'),
        'User'     => $request->input('user'),
        'Imagem'   => $request->input('imagem')
    ]);

    return redirect()->route('criar-postagem');
}
}
