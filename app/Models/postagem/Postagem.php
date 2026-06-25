<?php

namespace App\Models\Postagem;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    protected $table = 'postagens';

    protected $primaryKey = 'CodPostagem';

    public $timestamps = false;

    protected $fillable = [
        'Titulo',
        'Conteudo',
        'User',
        'Imagem'
    ];
}