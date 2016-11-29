<?php

namespace App\Http\Controllers;

use App\Repositories\SobreNosRepository;
use Illuminate\Http\Request;

class LandPageController extends Controller
{
    /**
     * @var SobreNosRepository
     */
    private $sobreNosRepository;

    public function __construct(SobreNosRepository $sobreNosRepository)
    {
        $this->sobreNosRepository = $sobreNosRepository;
    }

    public function index()
    {
        $sobreNos = $this->sobreNosRepository->scopeQuery(function($q){
            return $q->where(['status' => 1]);
        })->skipPresenter(true)->all();

        return view('LandPage.index', compact('sobreNos'));
    }
}
