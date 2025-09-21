<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\AttachProfileAbilitiesFormRequest;
use App\Http\Requests\StoreUpdateProfileFormRequest;
use App\Services\ProfileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProfileController extends CrudController
{
    public function __construct(private ProfileService $service)
    {
        parent::__construct($service);
    }

    
}
