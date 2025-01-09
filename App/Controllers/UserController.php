<?php
namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $user = new User(1, 'John Doe', 'john@example.com');
        return $user;
    }
}
