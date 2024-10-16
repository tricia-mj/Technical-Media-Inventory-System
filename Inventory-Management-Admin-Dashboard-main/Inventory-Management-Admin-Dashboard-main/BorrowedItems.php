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
}
?>
