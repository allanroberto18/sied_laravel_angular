<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\PaginaCaracteristica;

/**
 * Class PaginaCaracteristicaTransformer
 * @package namespace App\Transformers;
 */
class PaginaCaracteristicaTransformer extends TransformerAbstract
{

    /**
     * Transform the \PaginaCaracteristica entity
     * @param \PaginaCaracteristica $model
     *
     * @return array
     */
    public function transform(PaginaCaracteristica $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
