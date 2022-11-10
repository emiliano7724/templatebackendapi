<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegisterRequest;
use App\Repository\Contracts\UserRepositoryInterface;
class RegisterController extends Controller
{

    protected UserRepositoryInterface $userRepositoryInterface;

    function __construct(UserRepositoryInterface $userRepositoryInterface)
    {

        $this->userRepositoryInterface = $userRepositoryInterface;
    }

    public function register(RegisterRequest $request)
    {
  
        try {
            return api()->ok(null, $this->userRepositoryInterface->store((object)$request->all()));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    
    }
}
