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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/contato/{nome}', [App\Http\Controllers\Contato::class, 'contato']);

Route::get('/contato/{nome}/{sobrenome}', [App\Http\Controllers\Contato::class, 'contatoNomeCompleto']);Route::get('/contato/{nome}', [App\Http\Controllers\Contato::class, 'contato']);

Route::get('/contato/{nome}/{sobrenome}/{assunto}', [App\Http\Controllers\Contato::class, 'assunto']);Route::get('/contato/{nome}/{assunto}', [App\Http\Controllers\Contato::class, 'contato']);










