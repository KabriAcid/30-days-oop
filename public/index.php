<?php
require __DIR__ . '/../vendor/autoload.php'; // Ensure the autoloader is included

use App\Database\Database;

$db = new Database();

echo $db->connect() ? "true" : "false";
