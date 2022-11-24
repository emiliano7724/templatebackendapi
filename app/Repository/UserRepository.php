<?php

namespace App\Repository;


use App\Repository\Contracts\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserRepository implements UserRepositoryInterface
{
    public User $userModel;



    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function store(object $data)
    {

        return  $this->userModel::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password)
        ]);
    }
    public function login($data)
    {

        if (!Auth::attempt($data->only('email', 'password'))) {
            $response = ['estado' => 'warning', 'data' => null, 'message' => 'Credenciales incorrectas'];
            return $response;
        }

        $user =  $this->userModel::where('email', $data->email)->first();

        $token = $user->createToken('auth_token')->plainTextToken;
        $data = ["token" => $token, "user" => $user];
        return $data;
    }
    public function logout($request)
    { 
        // Revoke the token that was used to authenticate the current request...
        return auth('web')->logout();
       
    }
    public function update($request, $user)
    {
       
        $user->fill($request);
        if ($user->isDirty()) {
            $user->save();
            return $user;
        } else {
            $response = ['estado' => 'noChanges', 'data' => $request, 'message' => 'No se realizaron modificaciones'];
            return $response;
        }
    }
}
