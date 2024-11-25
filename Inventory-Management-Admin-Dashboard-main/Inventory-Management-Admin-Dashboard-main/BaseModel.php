<?php

class BaseModel {
    protected $db;

    public function __construct() {
        $this->db = $this->connect();
    }

    private function connect() {
        $servername = "localhost";
        $username = "root"; // Replace with your MySQL username
        $password = ""; // Replace with your MySQL password
        $dbname = "borrowed_items"; // Replace with your database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    public function __destruct() {
        $this->db->close();
    }
}
