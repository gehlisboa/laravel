<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postagem\CriarController;

Route::get('/criar-postagem', [CriarController::class, 'create'])->name('criar-postagem');

Route::post('/criar-postagem', [CriarController::class, 'store'])->name('salvar-postagem');


use App\Http\Controllers\Postagem\EditarController;

Route::get('/editar-postagem', [EditarController::class, 'edit'])->name('editar-postagem');

Route::put('/editar-postagem', [EditarController::class, 'update'])->name('atualizar-postagem');

use App\Http\Controllers\Postagem\ListarController;

Route::get('/listar-postagem', [ListarController::class, 'index'])->name('listar-postagem');

use App\Http\Controllers\Usuario\UsuarioController;

Route::get('/usuario/{user}', [UsuarioController::class, 'show']);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/like/{id}', [HomeController::class, 'like'])->name('like.post');


use App\Http\Controllers\Tendencias\TendenciasController;

Route::get('/tendencias', [TendenciasController::class, 'index']);