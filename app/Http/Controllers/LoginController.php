<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

use App\Repository\Contracts\UserRepositoryInterface;

class LoginController extends Controller
{
    protected UserRepositoryInterface $userRepositoryInterface;

    function __construct(UserRepositoryInterface $userRepositoryInterface)
    {

        $this->userRepositoryInterface = $userRepositoryInterface;
    }


    public function login(LoginRequest $request)
    {
        
        try {
            return api()->ok(null, $this->userRepositoryInterface->login($request));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
   
    }

    public function logout(Request $request)
    {

        try {
            return api()->ok(null, $this->userRepositoryInterface->logout($request));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
     
    }
}
