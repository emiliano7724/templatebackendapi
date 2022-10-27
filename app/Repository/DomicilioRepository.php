<?php

namespace App\Repository;


use App\Repository\Contracts\DomicilioRepositoryInterface;
use App\Models\Domicilio;
use App\Models\Personal;

class DomicilioRepository implements DomicilioRepositoryInterface
{
    protected Domicilio $domicilioModel;
    protected Personal $perosnalModel;


    function __construct(Domicilio $domicilioModel, Personal $personalModel)
    {
        $this->domicilioModel = $domicilioModel;
        $this->personalModel = $personalModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($legajo)
    {

        return $this->domicilioModel->with('localidad', 'provincia', 'departamento')->porLegajo($legajo)->get();
    }
    public function store($data)
    {
        return $this->domicilioModel->create($data);
    }
    public function show($legajo, $id)
    {
        return $this->domicilioModel->porLegajo($legajo)->find($id);
    }
}
