<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Contracts\DomicilioRepositoryInterface;
use App\Models\Personal;
use App\Models\Domicilio;
class DomicilioController extends Controller
{

    protected DomicilioRepositoryInterface $domicilioReposiInterface;
  
    function __construct(DomicilioRepositoryInterface $domicilioReposiInterface){
    
        $this->domicilioReposiInterface= $domicilioReposiInterface;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Personal $legajo)
    {

        try {
        
            $data=
            [
                'domicilios'=>$this->domicilioReposiInterface->index($legajo->nlegajo_ps),
                'personal'=>$legajo
            ];
            return  api()->ok(null,$data);
        } catch (\Throwable $th) {
           return api()->error($th->getMessage());
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
      try {
        return  api()->ok(null,$this->domicilioReposiInterface->store($request->all()));
    } catch (\Throwable $th) {
       return api()->error($th->getMessage());
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $legajo, Domicilio $domicilio)
    {
        try {
            return  api()->ok(null,$this->domicilioReposiInterface->show($legajo->nlegajo_ps,$domicilio->id_dm));
        } catch (\Throwable $th) {
           return api()->error($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
