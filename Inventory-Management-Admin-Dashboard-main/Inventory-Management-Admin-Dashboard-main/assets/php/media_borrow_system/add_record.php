<?php
require 'Database.php';
require 'BorrowRecord.php';

// Create a new Database object and BorrowRecord object
$db = new Database();
$borrowRecord = new BorrowRecord($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $item = $_POST['item'];
    $borrowedBy = $_POST['borrowed_by'];
    $department = $_POST['department'];
    $courseProgram = $_POST['course_program'];
    $signature = $_POST['signature'];

    if ($borrowRecord->addRecord($date, $time, $venue, $item, $borrowedBy, $department, $courseProgram, $signature)) {
        header("Location: list_records.php"); // Redirect to the list page after successful submission
        exit();
    } else {
        echo "Failed to add the record.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Borrowed Record</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Update with correct path -->
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Add Borrowed Record</h2>

        <!-- Form to add a new borrow record -->
        <form action="add_record.php" method="POST" class="mb-4">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="venue">Venue</label>
                <input type="text" class="form-control" id="venue" name="venue" required>
            </div>
            <div class="form-group">
                <label for="item">Item</label>
                <input type="text" class="form-control" id="item" name="item" required>
            </div>
            <div class="form-group">
                <label for="borrowed_by">Borrowed By</label>
                <input type="text" class="form-control" id="borrowed_by" name="borrowed_by" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="course_program">Course/Program</label>
                <input type="text" class="form-control" id="course_program" name="course_program" required>
            </div>
            <div class="form-group">
                <label for="signature">Signature</label>
                <input type="text" class="form-control" id="signature" name="signature" required>
            </div>
            <button type="submit" class="btn btn-success mt-2">Add Record</button>
        </form>
    </div>

    <script src="path/to/bootstrap.bundle.min.js"></script> <!-- Update with correct path -->
</body>
</html>
