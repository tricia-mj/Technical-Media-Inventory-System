<?php
require 'Database.php';
require 'BorrowRecord.php';

// Create a new Database object and BorrowRecord object
$db = new Database();
$borrowRecord = new BorrowRecord($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Add a new record
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $item = $_POST['item'];
    $borrowedBy = $_POST['borrowed_by'];
    $department = $_POST['department'];
    $courseProgram = $_POST['course_program'];
    $signature = $_POST['signature'];

    $borrowRecord->addRecord($date, $time, $venue, $item, $borrowedBy, $department, $courseProgram, $signature);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Items Tracker</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Update with correct path -->
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Borrowed Items Tracker</h2>

        <!-- Form to add a new borrow record -->
        <form action="index.php" method="POST" class="mb-4">
            <!-- Form fields go here (same as previous example) -->
        </form>

        <!-- Table to display borrowed records -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>Item</th>
                    <th>Borrowed By</th>
                    <th>Department</th>
                    <th>Course/Program</th>
                    <th>Signature</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $borrowRecord->getAllRecords();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['date']}</td>
                                <td>{$row['time']}</td>
                                <td>{$row['venue']}</td>
                                <td>{$row['item']}</td>
                                <td>{$row['borrowed_by']}</td>
                                <td>{$row['department']}</td>
                                <td>{$row['course_program']}</td>
                                <td>{$row['signature']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="path/to/bootstrap.bundle.min.js"></script> <!-- Update with correct path -->
</body>
</html>
