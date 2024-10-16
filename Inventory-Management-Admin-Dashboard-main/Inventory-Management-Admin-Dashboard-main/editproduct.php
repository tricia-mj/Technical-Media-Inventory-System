<?php
// Include the database connection file
include 'db_connection.php';

class BorrowedItem {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function getItem($id) {
        $sql = "SELECT * FROM borrowed_items WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateItem($id, $data) {
        $update_sql = "UPDATE borrowed_items SET borrower=?, date=?, time=?, venue=?, item_borrowed=?, department=?, course_program=?, signature=? WHERE id=?";
        $stmt = $this->conn->prepare($update_sql);
        $stmt->bind_param("ssssssssi", $data['borrower'], $data['date'], $data['time'], $data['venue'], $data['item_borrowed'], $data['department'], $data['course_program'], $data['signature'], $id);
        return $stmt->execute();
    }
}

// Initialize BorrowedItem object
$borrowedItem = new BorrowedItem($conn);

// Fetch item data for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $item = $borrowedItem->getItem($id);
} else {
    header("Location: productlist.php");
    exit();
}

// Handle update request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'borrower' => $_POST['borrower'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
        'venue' => $_POST['venue'],
        'item_borrowed' => $_POST['item_borrowed'],
        'department' => $_POST['department'],
        'course_program' => $_POST['course_program'],
        'signature' => $_POST['signature'],
    ];

    // Update the item
    if ($borrowedItem->updateItem($id, $data)) {
        header("Location: productlist.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Borrowed Item</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .btn-custom {
            background-color: #ff7f50; /* Orange shade */
            color: white;
        }
        .btn-custom:hover {
            background-color: #ff6a40; /* Darker shade for hover */
        }
    </style>
</head>
<body>

<div class="page-wrapper" style="margin: 0 auto; max-width: 600px;">
    <div class="content">
        <div class="page-header text-center mb-4">
            <h4>Edit Borrowed Item</h4>
        </div>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="borrower" class="form-label">Borrower</label>
                <input type="text" class="form-control" id="borrower" name="borrower" value="<?php echo htmlspecialchars($item['borrower']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo htmlspecialchars($item['date']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time" value="<?php echo htmlspecialchars($item['time']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="venue" class="form-label">Venue</label>
                <input type="text" class="form-control" id="venue" name="venue" value="<?php echo htmlspecialchars($item['venue']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="item_borrowed" class="form-label">Item Borrowed</label>
                <input type="text" class="form-control" id="item_borrowed" name="item_borrowed" value="<?php echo htmlspecialchars($item['item_borrowed']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="<?php echo htmlspecialchars($item['department']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="course_program" class="form-label">Course/Program</label>
                <input type="text" class="form-control" id="course_program" name="course_program" value="<?php echo htmlspecialchars($item['course_program']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="signature" class="form-label">Signature</label>
                <input type="text" class="form-control" id="signature" name="signature" value="<?php echo htmlspecialchars($item['signature']); ?>" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-custom">Update Item</button>
                <a href="productlist.php" class="btn btn-secondary ms-2">Cancel</a>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
