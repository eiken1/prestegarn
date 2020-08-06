<?php

include_once('setup.php');

class Database  {
    // DB params
    private $host = 'localhost';
    private $db_name = 'prestgarn';
    private $username = 'root';
    private $password = ''; 
    private $conn;

    // DB connect
    public function connect() {
        $this->conn = null;

        try { 
            $this->conn = new PDO('mysql:host=' . $this->host . 
                ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
        
        return $this->conn;
    }
}

?>