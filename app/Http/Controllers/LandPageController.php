<?php

namespace App\Http\Controllers;

use App\Repositories\ConfigRepository;
use App\Repositories\PaginaRepository;
use App\Repositories\SobreNosRepository;
use Illuminate\Http\Request;

class LandPageController extends Controller
{
    /**
     * @var SobreNosRepository
     */
    private $sobreNosRepository;
    /**
     * @var ConfigRepository
     */
    private $configRepository;
    /**
     * @var PaginaRepository
     */
    private $paginaRepository;

    public function __construct(SobreNosRepository $sobreNosRepository, ConfigRepository $configRepository,
                                PaginaRepository $paginaRepository)
    {
        $this->sobreNosRepository = $sobreNosRepository;
        $this->configRepository = $configRepository;
        $this->paginaRepository = $paginaRepository;
    }

    public function index()
    {
        try {
            $config = $this->configRepository->find(1);

            if ($config->status == 0) {
                return view('LandPage.construcao');
            }

            $sobreNos = $this->sobreNosRepository->scopeQuery(function ($q) {
                return $q->where(['status' => 1]);
            })->skipPresenter(true)->all();

            $pagina = $this->paginaRepository->find(1);

            return view('LandPage.index', compact('sobreNos', 'config', 'pagina'));
        } catch (\Exception $ex) {
            return view('LandPage.construcao');
        }

    }
}
