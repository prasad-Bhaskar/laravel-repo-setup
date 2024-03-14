<?php

namespace App\RepositoryInterfaces;


abstract class UserRepositoryInterface {
    
    abstract public function getAllUser();
    abstract public function getUserById($id);
    abstract public function getUserByEmail($email);
}