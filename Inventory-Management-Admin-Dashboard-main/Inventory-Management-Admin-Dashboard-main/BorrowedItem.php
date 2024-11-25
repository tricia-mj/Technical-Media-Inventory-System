<?php
require_once 'BaseModel.php';

class BorrowedItem extends BaseModel {
    public function fetchItems() {
        $sql = "SELECT id, borrower, date, time, venue, item_borrowed, department, course_program, signature FROM borrowed_items";
        $result = $this->db->query($sql);

        if ($result === false) {
            echo "SQL Error: " . $this->db->error;
            return null;
        }

        return $result; // Returns a mysqli_result object
    }

    public function create($data) {
        $sql = "INSERT INTO borrowed_items (borrower, date, time, venue, item_borrowed, department, course_program, signature) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);

        if ($stmt === false) {
            echo "SQL Error: " . $this->db->error;
            return false;
        }

        $stmt->bind_param(
            "ssssssss", 
            $data[':borrower'], 
            $data[':date'], 
            $data[':time'], 
            $data[':venue'], 
            $data[':item_borrowed'], 
            $data[':department'], 
            $data[':course_program'], 
            $data[':signature']
        );

        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM borrowed_items WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        if ($stmt === false) {
            echo "SQL Error: " . $this->db->error;
            return false;
        }

        $stmt->bind_param("i", $id); // Bind the ID as an integer
        return $stmt->execute();
    }

    public function findById($id) {
        $sql = "SELECT id, borrower, date, time, venue, item_borrowed, department, course_program, signature 
                FROM borrowed_items 
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        if ($stmt === false) {
            echo "SQL Error: " . $this->db->error;
            return null;
        }

        $stmt->bind_param("i", $id); // Bind the ID as an integer
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc(); // Fetch a single row as an associative array
    }
}