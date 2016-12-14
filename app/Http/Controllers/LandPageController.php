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

            $caracteristicas = $this->makeSlider($this->processCaracteristicas($pagina));

            $totalCaracteristicas = count($caracteristicas);

            return view('LandPage.index', compact('sobreNos', 'config', 'pagina', 'caracteristicas', 'totalCaracteristicas'));
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return view('LandPage.construcao');
        }
    }

    private function processCaracteristicas($pagina)
    {
        $data = $pagina->caracteristicas;
        $total = count($data);
        if ($total == 0) {
            return;
        }
        $result = [];
        foreach ($data as $item) {
            if ($item->status == 0)
                continue;
            $result[] = $item;
        }
        return $result;
    }

    private function makeSlider($caracteristicas)
    {
        $total = count($caracteristicas);
        if ($total == 0) {
            return;
        }
        $result = [];
        for ($i = 0; $i < count($caracteristicas); $i+=3) {
            $result[$i][] = $caracteristicas[$i];
            $result[$i][] = $caracteristicas[$i+1];
            $result[$i][] = $caracteristicas[$i+2];
        }
        return $result;
    }
}
