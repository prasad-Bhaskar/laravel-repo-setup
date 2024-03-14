<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;


abstract class Controller
{
    //
    private ResponseService $responseService;

    public function __construct(ResponseService $responseService)
    {
        $this->responseService = $responseService;        
    }
}
