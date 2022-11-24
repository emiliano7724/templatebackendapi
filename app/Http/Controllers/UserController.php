<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Repository\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserController extends Controller
{
     
    const PASSWORD_DEFAULT = "12345678";

    protected UserRepositoryInterface $userRepositoryInterface;

    function __construct(UserRepositoryInterface $userRepositoryInterface)
    {

        $this->userRepositoryInterface = $userRepositoryInterface;
    }
 
    public function index(Request $request)
    {

       // return response()->json(["sd"=>$request->user()->id]);
        try {
            return api()->ok(null, $this->userRepositoryInterface->userModel::selectRaw('*,name as nombre')->get('name'));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
        
    }
    public function update(UpdateUserRequest $request, User $id)
    {
  
            try {
                return api()->ok(null, $this->userRepositoryInterface->update($request->all(),$id));
            } catch (\Throwable $th) {
                return api()->error($th->getMessage());
            }
        }
          
      
    
    public function show(User $id)
    {

        try {
         
           return api()->ok(null, $id);
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }

    public function store(UserStoreRequest $request)
    {
        try {
           // $request->estado ?  $fechaActual = null : $fechaActual = Carbon::now();
            // si el switch no esta hablitado se le guarda el deleted_at para el control de activos e inactivos

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
               // 'deleted_at' => $fechaActual,
               // 'id_rol' => $request->selectedRol,
                'password' => Hash::make(self::PASSWORD_DEFAULT)
            ]);

            return api()->ok(null, $user);
          
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }
}
