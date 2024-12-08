<?php
// Include necessary files
require 'Database.php';
require 'BorrowedItem.php';

// Initialize the borrowed items model
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>

<div class="page-wrapper" style="margin: 0 auto; max-width: 1200px;">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>CSAB Technical Media Borrowed Items List</h4>
                <h6>Keep Track of Borrowed Items</h6>
            </div>
            <div class="page-btn">
                <a href="addborrower.php" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Item</a>
            </div>
        </div>

        <div class="container mt-5">
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
                                    <!-- Edit Button -->
                                    <a href="editborrower.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    
                                    <!-- Delete Button -->
                                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Libraries -->
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
