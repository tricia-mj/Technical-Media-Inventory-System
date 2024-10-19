<?php
include 'Database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = new Database();
    $conn = $db->conn;

    // Prepare and execute delete statement
    $sql = "DELETE FROM borrowed_items WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Record deleted successfully, redirect to product list
        header("Location: index.php");
        exit();
    } else {
        // Error in deleting record
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}
?>

