<?php

require __DIR__ . '/../app/database/database.php';

class User {
    public $table;
    
    public function __construct($table)
    {
        $this->table = $table;
    }
    public function retrieve()
    {
        $db = new Database;
        $conn = $db->connect();
        $sql = "SELECT * FROM $this->table";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    public function insert($name, $email)
    {
        $db = new Database;
        $conn = $db->connect();
        $sql = "INSERT INTO $this->table (name, email) VALUES ('$name', '$email')";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    public function update($id){
        $db = new Database;
        $conn = $db->connect();
        $sql = "UPDATE $this->table SET name = 'John Doe' WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    public function delete($id){
        $db = new Database;
        $conn = $db->connect();
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

}