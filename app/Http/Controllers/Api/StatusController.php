<?php

namespace App\Http\Controllers\Api;

use App\Services\StatusService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class StatusController extends CrudController
{
    public function __construct(private StatusService $service)
    {
        parent::__construct($service);
    }

    
}
