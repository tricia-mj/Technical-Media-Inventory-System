<?php
class Database {
    private $host = "localhost"; // Change as needed
    private $username = "username"; // Change as needed
    private $password = "password"; // Change as needed
    private $dbname = "borrowed_items"; // Change as needed
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
