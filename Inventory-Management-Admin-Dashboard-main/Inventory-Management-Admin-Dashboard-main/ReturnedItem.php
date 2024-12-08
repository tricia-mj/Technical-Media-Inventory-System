<?php
require_once 'Database.php';

class ReturnedItem {
    private $connection;

    public function __construct() {
        $this->connection = Database::getInstance()->getConnection();
    }

    public function create($data) {
        $sql = "INSERT INTO returned_media_create (borrowed_item_id, returned_item, return_date, remarks)
                VALUES (:borrowed_item_id, :returned_item, :return_date, :remarks)";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':borrowed_item_id', $data['borrowed_item_id'], PDO::PARAM_INT);
        $stmt->bindParam(':returned_item', $data['returned_item'], PDO::PARAM_STR);
        $stmt->bindParam(':return_date', $data['return_date'], PDO::PARAM_STR);
        $stmt->bindParam(':remarks', $data['remarks'], PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function fetchItems() {
        $sql = "SELECT r.id, b.borrower, b.item_borrowed, r.returned_item, r.return_date, r.remarks
                FROM returned_media_create r
                JOIN borrowed_items b ON r.borrowed_item_id = b.id";

        $stmt = $this->connection->query($sql);
        if ($stmt === false) {
            return [];
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $sql = "SELECT * FROM returned_media_create WHERE id = ?";
        $stmt = $this->connection->prepare($sql); // Use $this->connection
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $sql = "UPDATE returned_media_create SET
                    borrowed_item_id = ?, 
                    
                    return_date = ?,   
                    remarks = ? 
                WHERE id = ?";
        $stmt = $this->connection->prepare($sql); // Use $this->connection
        return $stmt->execute([
            $data['borrowed_item_id'], 
            
            $data['return_date'],              
            $data['remarks'], 
            $id
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM returned_media_create WHERE id = ?";
        $stmt = $this->connection->prepare($sql); // Use $this->connection
        return $stmt->execute([$id]);
    }




}
