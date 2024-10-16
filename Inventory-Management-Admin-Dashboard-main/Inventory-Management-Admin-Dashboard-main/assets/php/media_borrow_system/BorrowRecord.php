<?php
class BorrowRecord {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addRecord($date, $time, $venue, $item, $borrowedBy, $department, $courseProgram, $signature) {
        $stmt = $this->conn->prepare("INSERT INTO borrow_records (date, time, venue, item, borrowed_by, department, course_program, signature) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $date, $time, $venue, $item, $borrowedBy, $department, $courseProgram, $signature);
        return $stmt->execute();
    }

    public function getAllRecords() {
        $sql = "SELECT * FROM borrow_records";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
s