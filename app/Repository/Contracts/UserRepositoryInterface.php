<?php

namespace App\Repository\Contracts;



interface UserRepositoryInterface 
{

    public function store(object $data);
    public function login($data);
    public function logout($request);
    public function update($request, $user);

 
}
