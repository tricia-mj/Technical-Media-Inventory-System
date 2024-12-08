<?php
require 'Database.php';
require 'BorrowedItem.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $borrowedItem = new BorrowedItem();

    if ($borrowedItem->delete($id)) {
        header("Location: index.php"); // Redirect to the list page
        exit();
    } else {
        echo "Error deleting record.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>