<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Banner extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'pagina_id', 'retranca', 'titulo', 'resumo', 'link', 'imagem_destaque', 'imagem_fundo', 'status'
    ];

    public function pagina()
    {
        return $this->belongsTo(Pagina::class, 'pagina_id', 'id');
    }

}
