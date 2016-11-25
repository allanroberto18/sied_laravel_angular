<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\FaleConoscoAssuntoRepository;
use App\Models\FaleConoscoAssunto;
use App\Validators\FaleConoscoAssuntoValidator;

/**
 * Class FaleConoscoAssuntoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class FaleConoscoAssuntoRepositoryEloquent extends BaseRepository implements FaleConoscoAssuntoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return FaleConoscoAssunto::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
