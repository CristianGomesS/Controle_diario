<?php

namespace App\Http\Controllers\Api;

use App\Services\FuncionarioService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class FuncionarioController extends CrudController
{
    public function __construct(private FuncionarioService $service)
    {
        parent::__construct($service);
    }

    
}
