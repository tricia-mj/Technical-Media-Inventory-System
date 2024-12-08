<?php
require 'Database.php';
require 'BorrowedItem.php';

$borrowedItem = new BorrowedItem();
$result = $borrowedItem->fetchItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Items List</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
        display: flex;
        margin: 0;
        overflow-x: hidden;
        background-color: #f8f9fa;
    }
    .sidebar {
        width: 250px;
        background-color: #343a40;
        color: white;
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh; /* Extend to fill the viewport height */
    }
    .content {
        margin-left: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* Center vertically and horizontally */
        width: calc(100% - 250px);
        padding: 20px;
        flex-direction: column; /* Stack content */
    }
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        width: 100%; /* Make header span full width */
        text-align: center;
    }
    .page-title {
        margin: 0;
    }
    .table-responsive {
        width: 100%; /* Ensure table fits within the container */
        max-width: 1200px; /* Optional: limit the table width */
    }
    </style>

</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h3>Borrowed Items List</h3>
            </div>
            <div class="page-btn">
                <a href="addborrower.php" class="btn btn-added">
                    <img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Item
                </a>
            </div>
        </div>

        <div class="container mt-3">
            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th>Borrower</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Item Borrowed</th>
                            <th>Department</th>
                            <th>Course/Program</th>
                            <th>Signature</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['borrower']); ?></td>
                                <td><?= htmlspecialchars($row['date']); ?></td>
                                <td><?= htmlspecialchars($row['time']); ?></td>
                                <td><?= htmlspecialchars($row['venue']); ?></td>
                                <td><?= htmlspecialchars($row['item_borrowed']); ?></td>
                                <td><?= htmlspecialchars($row['department']); ?></td>
                                <td><?= htmlspecialchars($row['course_program']); ?></td>
                                <td><?= htmlspecialchars($row['signature']); ?></td>
                                <td>
                                    <a href="editborrower.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
    $(document).ready(function() {
        $('.datanew').DataTable();
    });
    </script>
</body>
</html>
