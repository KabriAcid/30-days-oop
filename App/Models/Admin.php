<?php
namespace App\Models;

class Admin extends User {
    public $role;

    public function __construct($id, $name, $email, $role)
    {
        parent::__construct($id, $name, $email);
        $this->role = $role;
    }
    public function getDetails()
    {
        return parent::getDetails() . "Role: $this->role";
    }
}