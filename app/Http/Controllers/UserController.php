<?php

namespace App\Http\Controllers;

use APP\ServiceInterfaces\IUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(IUserService $userService)
    {
       $this->userService = $userService; 
    }

    public function getAllUser(){
        return $this->userService->getAllUser();
    }

    public function getUserById(Request $request, $id){
        return $this->userService->getUserById($id);
    }
    
}
