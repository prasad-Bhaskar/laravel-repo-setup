<?php
namespace App\Repository;

use App\Models\User;
use App\RepositoryInterfaces\UserRepositoryInterface;

class UserRepository extends UserRepositoryInterface{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /* 
    * @override
    *
    */
    public function getAllUser(){
        return $this->user->where('active', 1)->get();
    }

    /* 
    * @override
    *
    */
    public function getUserById($id){

    }

    /* 
    * @override
    *
    */
    public function getUserByEmail($email){

    }    
}