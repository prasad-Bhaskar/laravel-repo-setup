<?php
namespace App\Repository;

use App\Models\User;
use App\RepositoryInterfaces\IUserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements IUserRepository{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /* 
    * @override
    *
    */
    public function getAllUser() :Collection
    {
        return $this->user->all();
    }

    /* 
    * @override
    *
    */
    public function getUserById($id):User
    {
        return $this->user->where('id', $id)->firstOrFail();
    }

    /* 
    * @override
    *
    */
    public function getUserByEmail($email):User
    {
        return $this->user->where('id', $email)->firstOrFail();
    }    
}