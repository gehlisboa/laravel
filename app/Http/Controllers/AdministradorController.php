<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdministradorModel;

class AdministradorController extends Controller
{
    function index(){
        return view('administrador.index', [
            'administradores' => AdministradorModel::all()
        ]);
    }

    function add(Request $request)
    {
        AdministradorModel::create($request->all());

        return view('administrador.index', [
            'success' => 'Cadastrado!',
            'administradores' => AdministradorModel::all()
        ]);
    }

    function remove(string $id) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador::destroy($id);

        return view('administrador.index', ['success'=>'Removido!', 'administradores'=>$administrador::all()]);
    }

    function atualizar(string $id) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador = $administrador::find($id);

        return view('administrador.atualizar', ['administrador'=>$administrador]);
    }

    
    function save(Request $dados) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador  = $administrador ::find($dados->id);
        $administrador ->update($dados->all());

        return view('administrador .index', ['success'=>'Atualizado!', 'administradores'=>$administrador ::all()]);
    }



}
