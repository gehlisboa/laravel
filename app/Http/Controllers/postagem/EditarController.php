<?php

namespace App\Http\Controllers\Postagem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Postagem\Postagem;

class EditarController extends Controller
{
    // MOSTRAR A TELA DE EDIÇÃO
    public function edit($id)
    {
        $postagem = Postagem::findOrFail($id);

        return view('postagem.editar_postagem', compact('postagem'));
    }

    // ATUALIZAR POSTAGEM
    public function update(Request $request, $id)
    {
        $postagem = Postagem::findOrFail($id);

        $postagem->update([
            'Titulo'   => $request->Titulo,
            'Conteudo' => $request->Conteudo,
            'User'     => $request->User,
            'Imagem'   => $request->Imagem
        ]);

        return redirect()
            ->route('editar-postagem', $id)
            ->with('sucesso', 'Postagem atualizada com sucesso!');
    }
}