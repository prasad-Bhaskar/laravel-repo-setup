<?php

namespace APP\ServiceInterfaces;

abstract class UserServiceInterface{
    abstract public function getAllUser();
    abstract public function getUserById($id);
    abstract public function getUserByEmail($email);
}