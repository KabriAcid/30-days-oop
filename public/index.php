<title>OOP in PHP</title>
<?php

require '../autoload.php';

use App\Controllers\UserController;

$controller = new UserController();
$user = $controller->index();

$data = $user;

include '../app/Views/user.php';
