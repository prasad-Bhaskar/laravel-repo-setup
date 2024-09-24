<?php

namespace App\RepositoryInterfaces;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
interface IUserRepository {
    
    public function getAllUser():Collection;
    public function getUserById($id):User;
    public function getUserByEmail($email):User;
}