<?php
require 'Database.php';
require 'ReturnedItem.php';

// Fetch borrowed items
$db = Database::getInstance()->getConnection();
$sql = "SELECT id, borrower, item_borrowed FROM borrowed_items";
$stmt = $db->query($sql);
$borrowedItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $returnedItem = new ReturnedItem();

    $data = [
        'borrowed_item_id' => $_POST['borrowed_item_id'],
        'returned_item' => $_POST['returned_item'],
        'return_date' => $_POST['return_date'],
        'remarks' => $_POST['remarks']
    ];

    if ($returnedItem->create($data)) {
        header("Location: return_items.php");
        exit();
    } else {
        $error_message = "Error adding return record.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Returned Item</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <style>
        .btn-submit {
            background-color: #FFA500; /* Orange color for submit button */
            border: none;
            color: white;
        }
        .btn-cancel {
            background-color: transparent;
            border: 2px solid #FFA500; /* Same shade of orange as submit button */
            color: #FFA500; /* Same shade of orange */
        }
        .page-header {
            margin-bottom: 30px; /* Space between the headline and the form */
        }
        .container {
            margin-top: 30px; /* Space from the navigation bar */
        }
        .form-buttons {
            margin-top: 20px; /* Space between the form and the buttons */
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
        }
        .form-layout {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }
        .form-left, .form-right {
            flex: 1;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Returned Item</h4>
                    <h6>Enter the details of the returned item</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <!-- Display error message if any -->
                    <?php if (isset($error_message)): ?>
                        <div class="error-message"><?php echo $error_message; ?></div>
                    <?php endif; ?>

                    <!-- Form to add returned item -->
                    <form method="POST" action="">
                        <div class="form-layout">
                            <div class="form-left">
                                <div class="form-group">
                                    <label>Borrower & Borrowed Item</label>
                                    <select name="borrowed_item_id" class="form-control" required>
                                        <option value="">Select Borrowed Item</option>
                                        <?php foreach ($borrowedItems as $item): ?>
                                            <option value="<?= $item['id']; ?>">
                                                <?= htmlspecialchars($item['borrower'] . " - " . $item['item_borrowed']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Return Date</label>
                                    <input type="date" name="return_date" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-right">
                                <div class="form-group">
                                    <label>Returned Item</label>
                                    <input type="text" name="returned_item" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Remarks</label>
                                    <textarea name="remarks" class="form-control" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-buttons">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="return_items.php" class="btn btn-cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
