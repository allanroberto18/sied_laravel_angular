<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $titulo = 'Página Principal';
        $subtitulo = 'Acesso Rápido';
        return view('admin.dashboard.index', compact('titulo', 'subtitulo'));
    }
}
