<?php

namespace App\Services;

use App\RepositoryInterfaces\IUserRepository;
use App\ServiceInterfaces\IUserService;

class UserService implements IUserService{
    private $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUser(){
        return $this->userRepository->getAllUser();
    }
    public function getUserById($id){
        return $this->userRepository->getUserById($id);
    }
    public function getUserByEmail($email){
        
    }
}