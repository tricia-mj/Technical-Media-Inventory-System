<?php
require 'Database.php';
require 'ReturnedItem.php';

// Fetch the returned item based on the ID
$returnedItem = new ReturnedItem(); // Use the constructor that doesn't require passing $conn directly

// Fetch the borrowed items to populate the select field
$db = Database::getInstance()->getConnection();
$sql = "SELECT id, borrower, item_borrowed FROM borrowed_items";
$stmt = $db->query($sql);
$borrowedItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch item for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $item = $returnedItem->findById($id); // Use findById instead of getItem
    if (!$item) {
        // If item is not found, redirect back to the list
        header("Location: return_items.php");
        exit();
    }
} else {
    // If no ID is provided, redirect back to the list
    header("Location: return_items.php");
    exit();
}

// Handle the update form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'borrowed_item_id' => $_POST['borrowed_item'],  // This should match the selected field's name
        'return_date' => $_POST['return_date'],
        'remarks' => $_POST['remarks']
    ];

    if ($returnedItem->update($id, $data)) {
        header("Location: return_items.php");
        exit();
    } else {
        $error_message = "Failed to update the item. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Returned Item</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h4>Edit Returned Item</h4>
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error_message); ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="form-group">
            <label>Borrower & Borrowed Item</label>
            <select name="borrowed_item" class="form-control" required>
                <option value="">Select Borrowed Item</option>
                <?php foreach ($borrowedItems as $borrowed): ?>
                    <option value="<?= $borrowed['id']; ?>"
                        <?php if ($borrowed['id'] == $item['borrowed_item_id']) echo 'selected'; ?>>
                        <?= htmlspecialchars($borrowed['borrower'] . " - " . $borrowed['item_borrowed']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Return Date</label>
            <input type="date" name="return_date" class="form-control" value="<?= htmlspecialchars($item['return_date']); ?>" required>
        </div>
        <div class="form-group">
            <label>Remarks</label>
            <input type="text" name="remarks" class="form-control" value="<?= htmlspecialchars($item['remarks']); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="return_items.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
