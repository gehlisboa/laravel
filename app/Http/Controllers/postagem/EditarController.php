<?php

namespace App\Http\Controllers\Postagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Postagem\EditarPostagem;

class EditarController extends Controller
{
    public function edit()
    {
        return view('postagem.editar_postagem');
    }

    public function update(Request $request)
    {
        $postagem = EditarPostagem::find($request->CodPostagem);

        if (!$postagem) {
            return back()->with('erro', 'Postagem não encontrada.');
        }

        $postagem->update([
            'Titulo'   => $request->Titulo,
            'Conteudo' => $request->Conteudo,
            'User'     => $request->User,
            'Imagem'   => $request->Imagem
        ]);

        return redirect()->route('editar-postagem')
                         ->with('sucesso', 'Postagem atualizada com sucesso!');
    }
}
