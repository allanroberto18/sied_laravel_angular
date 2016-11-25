<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Pagina;

/**
 * Class PaginaTransformer
 * @package namespace App\Transformers;
 */
class PaginaTransformer extends TransformerAbstract
{

    /**
     * Transform the \Pagina entity
     * @param \Pagina $model
     *
     * @return array
     */
    public function transform(Pagina $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
