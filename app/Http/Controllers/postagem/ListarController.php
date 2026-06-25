<?php

namespace App\Http\Controllers\Postagem;

use App\Http\Controllers\Controller;
use App\Models\Postagem\Postagem;

class ListarController extends Controller
{
    public function index()
    {
        $postagens = Postagem::all();

        return view('postagem.listar_postagem', compact('postagens'));
    }
}