<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\FaleConoscoRepository;
use App\Models\FaleConosco;
use App\Validators\FaleConoscoValidator;

/**
 * Class FaleConoscoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class FaleConoscoRepositoryEloquent extends BaseRepository implements FaleConoscoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return FaleConosco::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
