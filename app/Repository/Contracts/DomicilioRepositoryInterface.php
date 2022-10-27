<?php

namespace App\Repository\Contracts;



interface DomicilioRepositoryInterface 
{
    public function index( int $legajo);
    public function store(array $data);
    public function show(int $legajo, int $domicilio);
 
}
