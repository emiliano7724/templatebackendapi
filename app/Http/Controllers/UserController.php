<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
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
 
    public function index()
    {
        try {
            return api()->ok(null, $this->userRepositoryInterface->userModel::all());
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
        
    }
    public function update(UpdateUserRequest $request, User $user)
    {
   
            try {
                return api()->ok(null, $this->userRepositoryInterface->update($request->all(),$user));
            } catch (\Throwable $th) {
                return api()->error($th->getMessage());
            }
        }
          
      
    
    public function edit(Request $request)
    {

        try {
            $user = User::findOrfail($request->id);
            $response = ['estado' => 'succes', 'data' => $user, 'message' => 'Usuario retornado con éxito'];
            return response()->json($response);
        } catch (\Throwable $th) {
            $response = ['estado' => 'error', 'data' => $th->getMessage(), 'message' => 'Ocurrió un error'];
            return response()->json($response);
        }
    }

    public function store(RegisterRequest $request)
    {
        try {
            $request->estado ?  $fechaActual = null : $fechaActual = Carbon::now();
            // si el switch no esta hablitado se le guarda el deleted_at para el control de activos e inactivos

            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'deleted_at' => $fechaActual,
                'id_rol' => $request->selectedRol,
                'password' => Hash::make(self::PASSWORD_DEFAULT)
            ]);

            $token = $users->createToken('auth_token')->plainTextToken;
            $response = ['estado' => 'succes', 'data' => $users, 'token' => $token, 'message' => 'Usuario creado con éxito'];
            return response()->json($response);
        } catch (\Throwable $th) {
            $response = ['estado' => 'error', 'data' => $th->getMessage(), 'message' => 'Ocurrió un error'];
            return response()->json($response);
        }
    }
}
