<?php

use Illuminate\Support\Facades\Route;

/* =========================
   CRIAR POSTAGEM
========================= */
use App\Http\Controllers\Postagem\CriarController;

Route::get('/criar-postagem', [CriarController::class, 'create'])->name('criar-postagem');

Route::post('/criar-postagem', [CriarController::class, 'store'])->name('criar-postagem.store');

/* =========================
   EDITAR POSTAGEM
========================= */
use App\Http\Controllers\Postagem\EditarController;

Route::get('/editar-postagem/{id}', [EditarController::class, 'edit'])->name('editar-postagem');

Route::put('/editar-postagem/{id}', [EditarController::class, 'update'])->name('atualizar-postagem');
/* =========================
   LISTAR POSTAGEM
========================= */
use App\Http\Controllers\Postagem\ListarController;

Route::get('/listar-postagem', [ListarController::class, 'index'])->name('listar-postagem');

/* =========================
   USUÁRIO
========================= */
use App\Http\Controllers\Usuario\UsuarioController;

Route::get('/usuario/{user}', [UsuarioController::class, 'show'])
    ->name('usuario.show');

/* =========================
   HOME
========================= */
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/like/{id}', [HomeController::class, 'like'])->name('like.post');

/* =========================
   TENDÊNCIAS
========================= */
use App\Http\Controllers\Tendencias\TendenciasController;

Route::get('/tendencias/{categoria}', [TendenciasController::class, 'show']);

/* =========================
   PINS
========================= */
use App\Http\Controllers\Pins\PinController;

Route::get('/pins', [PinController::class, 'index'])->name('pins.index');