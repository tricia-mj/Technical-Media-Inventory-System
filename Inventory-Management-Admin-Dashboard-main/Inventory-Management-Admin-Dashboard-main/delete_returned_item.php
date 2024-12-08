<?php
require 'Database.php';
require 'ReturnedItem.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $returnedItem = new ReturnedItem();

    if ($returnedItem->delete($id)) {
        header("Location: return_items.php");
        exit();
    } else {
        echo "Error deleting record.";
    }
} else {
    header("Location: return_items.php");
    exit();
}
?>
