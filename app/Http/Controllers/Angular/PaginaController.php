<?php

namespace App\Http\Controllers\Angular;

use App\Http\Requests\Admin\PaginaRequest;
use App\Http\Requests\Admin\PaginaUploadRequest;
use Illuminate\Http\Request;
use App\Repositories\PaginaRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class PaginaController extends Controller
{
    /**
     * @var PaginaRepository
     */
    private $repository;

    /**
     * PaginaController constructor.
     */
    public function __construct(PaginaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        return $this->repository->scopeQuery(function ($q) {
            return $q->where([
                'status' => 1
            ])->orderBy('id', 'desc');
        })->skipPresenter(false)->paginate(10);
    }

    public function remove($id)
    {
        $entity = $this->repository->find($id);

        $entity->status = 0;

        $entity->save();

        return Response::json(
            [
                "data" => "Registro #{$entity->id} removida com sucesso. \n"
            ]
        );
    }

    public function update(PaginaRequest $request, $id)
    {
        $entity = $this->repository->find($id);

        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $fileName = random_int(1111, 9999) . $extension;
            $request->file('imagem')->move(base_path() . '/public/img/pagina', $fileName);

            $data['imagem'] = $fileName;
        }

        $this->repository->update($data, $entity->id);

        return Response::json(
            [
                "data" => "Registro {$entity->name} alterado com sucesso",
                "id" => $entity->id
            ]
        );
    }

    public function create(PaginaRequest $request)
    {
        $data = $request->all();

        $entity = $this->repository->create($data);

        return Response::json(
            [
                "data" => "Registro {$entity->name} inserida com sucesso",
                "id" => $entity->id
            ]
        );
    }

    public function upload(PaginaUploadRequest $request)
    {
        $file = $request->file('file');

        $path = "img/pagina";

        $ext = $file->getClientOriginalExtension();
        $fileName = random_int(1111,9999) .'.'.$ext;
        $file->move($path, $fileName);

        return $fileName;
    }

    public function removeSelected(Request $request)
    {
        $data = $request->all();

        $count = count($data);

        if ($count == 0) {
            return Response::json(
                [
                    "data" => "Nenhum registro foi selecionado. \n"
                ]
            );
        }

        foreach ($data as $item) {
            $entity = $this->repository->find($item);

            $entity->status = 0;

            $entity->save();
        }

        return Response::json(
            [
                "data" => "Os registros foram excluídos com sucesso. \n"
            ]
        );
    }
}
