<?php

class Database {
    
    private $host = "localhost";
    private $db_name = "mydb";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection(){

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . "localhost" . ";dbname=" .
            $this->db_name,$this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $ex) {
            echo "Connection Error" . $ex->getMessage();
        }

        return $this->conn;
    }
}



?>