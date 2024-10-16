<?php
class Database {
    private $servername = "localhost";
    private $username = "root"; // replace with your MySQL username
    private $password = ""; // replace with your MySQL password
    private $dbname = "borrowed_items"; // replace with your database name
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>

