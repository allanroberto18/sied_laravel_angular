<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\PaginaVideo;

/**
 * Class PaginaVideoTransformer
 * @package namespace App\Transformers;
 */
class PaginaVideoTransformer extends TransformerAbstract
{

    /**
     * Transform the \PaginaVideo entity
     * @param \PaginaVideo $model
     *
     * @return array
     */
    public function transform(PaginaVideo $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
