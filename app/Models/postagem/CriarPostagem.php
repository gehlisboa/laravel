<?php

namespace App\Models\Postagem;

use Illuminate\Database\Eloquent\Model;

class CriarPostagem extends Model
{
    protected $table = 'postagens';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'Titulo',
        'Conteudo',
        'User',
        'Imagem'
    ];
}
