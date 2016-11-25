<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SobreNosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SobreNosController extends Controller
{
    /**
     * @var SobreNosRepository
     */
    private $repository;

    /**
     * SobreNosController constructor.
     */
    public function __construct(SobreNosRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $titulo = 'Sobre Nós';
        $subtitulo = 'Gerenciar Módulo';

        return view('admin.sobre_nos.index', compact('titulo', 'subtitulo'));
    }
}
