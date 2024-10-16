<?php
class BorrowedItem {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->conn;
    }

    public function fetchItems() {
        $sql = "SELECT id, borrower, date, time, venue, item_borrowed, department, course_program, signature FROM borrowed_items";
        return $this->db->query($sql);
    }

    public function addRecord($borrower, $date, $time, $venue, $item_borrowed, $department, $course_program, $signature) {
        $sql = "INSERT INTO borrowed_items (borrower, date, time, venue, item_borrowed, department, course_program, signature) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssssssss", $borrower, $date, $time, $venue, $item_borrowed, $department, $course_program, $signature);

        return $stmt->execute(); // Returns true on success
    }

}

?>


