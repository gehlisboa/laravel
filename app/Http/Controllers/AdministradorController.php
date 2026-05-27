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
}
