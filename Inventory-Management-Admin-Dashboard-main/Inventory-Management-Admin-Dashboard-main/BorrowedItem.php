<?php
require_once 'Database.php';

class BorrowedItem extends Database {
    public function __construct() {
        $db = Database::getInstance();
        $this->connection = $db->getConnection();  // Get the connection from the parent class
    }

    public function fetchItems() {
        $sql = "SELECT id, borrower, date, time, venue, item_borrowed, department, course_program, signature FROM borrowed_items";
        $stmt = $this->connection->query($sql);  // Use $this->connection instead of $this->db
        
        if ($stmt === false) {
            // Handle error if the query fails
            echo "Error in fetching records.";
            return [];
        }
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Always return an array, even if empty
    }


    
    public function create($data) {
        // SQL query to insert a new borrowed item
        $sql = "INSERT INTO borrowed_items (borrower, date, time, venue, item_borrowed, department, course_program, signature)
                VALUES (:borrower, :date, :time, :venue, :item_borrowed, :department, :course_program, :signature)";

        // Prepare the query
        $stmt = $this->connection->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(':borrower', $data['borrower']);
        $stmt->bindParam(':date', $data['date']);
        $stmt->bindParam(':time', $data['time']);
        $stmt->bindParam(':venue', $data['venue']);
        $stmt->bindParam(':item_borrowed', $data['item_borrowed']);
        $stmt->bindParam(':department', $data['department']);
        $stmt->bindParam(':course_program', $data['course_program']);
        $stmt->bindParam(':signature', $data['signature']);

        // Execute the query
        if ($stmt->execute()) {
            return true;  // Record created successfully
        } else {
            return false;  // Failed to create record
        }
    }


    public function findById($id) {
        $sql = "SELECT * FROM borrowed_items WHERE id = ?";
        $stmt = $this->connection->prepare($sql);  // Use $this->connection instead of $this->db
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $sql = "UPDATE borrowed_items SET 
                    borrower = ?, date = ?, time = ?, venue = ?, item_borrowed = ?, 
                    department = ?, course_program = ?, signature = ? 
                WHERE id = ?";
        $stmt = $this->connection->prepare($sql);  // Use $this->connection instead of $this->db
        return $stmt->execute([
            $data['borrower'], $data['date'], $data['time'], $data['venue'], 
            $data['item_borrowed'], $data['department'], $data['course_program'], 
            $data['signature'], $id
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM borrowed_items WHERE id = ?";
        $stmt = $this->connection->prepare($sql);  // Use $this->connection instead of $this->db
        return $stmt->execute([$id]);
    }
}
?>
