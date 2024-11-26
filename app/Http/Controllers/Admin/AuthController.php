<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ResponseService;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller {
    protected  $responseService;

    public function __construct(ResponseService $responseService)
    {
        $this->responseService = $responseService;
    }

    public function login(Request $request){
        return $this->responseService->ok('controller.test.done', ['test'=> 'controller.done']);
        // return response()->json(['test'=> 'controller.done'],200);
    }
}