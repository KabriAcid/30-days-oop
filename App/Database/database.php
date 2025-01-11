<?php

namespace App\Database;

require __DIR__ . '../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '../');
$dotenv->load();

class Database {
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct()
    {
        $this->host = $_ENV['DATABASE_SERVER'];
        $this->user = $_ENV['DATABASE_USER'];
        $this->password = $_ENV['DATABASE_PASSWORD'];
        $this->database = $_ENV['DATABASE_NAME'];
    }

    public function connect(){
        $connection = new \mysqli($this->host, $this->user, $this->password, $this->database);
        if($connection->connect_error){
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
}

