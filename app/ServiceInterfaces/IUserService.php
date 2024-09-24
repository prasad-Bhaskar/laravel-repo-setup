<?php

namespace APP\ServiceInterfaces;

interface IUserService{
    public function getAllUser();
    public function getUserById($id);
    public function getUserByEmail($email);
}