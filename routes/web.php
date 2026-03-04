<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'home'])->name('pagina-inicial');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'about'])->name('pagina-sobre');
Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);

// exercicios 
//aluno
Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno']);
//escola
Route::get('/escola', [App\Http\Controllers\Escola::class, 'escola']);
//professor
Route::get('/professor/login', [App\Http\Controllers\Professsor::class, 'login']);
Route::get('/professor/logout', [App\Http\Controllers\Professsor::class, 'logout']);
Route::get('/professor/consultar-notas', [App\Http\Controllers\Professsor::class, 'consultarNotas']);









