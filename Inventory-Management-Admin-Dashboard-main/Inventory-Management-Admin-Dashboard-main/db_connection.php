<?php
class Database {
    private $servername = "localhost";
    private $username = "root"; // default username
    private $password = ""; // default password
    private $dbname = "borrowed_items";
    public $conn;

    // Constructor to establish the database connection
    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Method to get the database connection
    public function getConnection() {
        return $this->conn;
    }


}
?>

