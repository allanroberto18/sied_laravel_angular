<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\FaleConosco;

/**
 * Class FaleConoscoTransformer
 * @package namespace App\Transformers;
 */
class FaleConoscoTransformer extends TransformerAbstract
{

    /**
     * Transform the \FaleConosco entity
     * @param \FaleConosco $model
     *
     * @return array
     */
    public function transform(FaleConosco $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
