<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pagina extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'retranca', 'titulo', 'resumo', 'texto', 'credito', 'imagem', 'legenda', 'status'
    ];

}
