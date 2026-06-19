<?php
namespace App\Models\Postagem;

use Illuminate\Database\Eloquent\Model;

class ListarPostagem extends Model
{
    protected $table = 'postagens';

    protected $primaryKey = 'CodPostagem';

    public $timestamps = false;
}
