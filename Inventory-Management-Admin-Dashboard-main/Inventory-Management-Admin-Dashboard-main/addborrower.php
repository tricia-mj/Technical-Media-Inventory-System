<?php
require 'Database.php';
require 'BaseModel.php';
require 'BorrowedItem.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $borrowedItem = new BorrowedItem();

    $data = [
        ':borrower' => $_POST['borrower'],
        ':date' => $_POST['date'],
        ':time' => $_POST['time'],
        ':venue' => $_POST['venue'],
        ':item_borrowed' => $_POST['item_borrowed'],
        ':department' => $_POST['department'],
        ':course_program' => $_POST['course_program'],
        ':signature' => $_POST['signature'],
    ];

    if ($borrowedItem->create($data)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error adding record.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Records Form</title>
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
    </style>
</head>
<body>
<div class="container">
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Borrowed Records</h4>
                    <h6>Add New Borrowed Record</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Borrower</label>
                                    <input type="text" name="borrower" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Time</label>
                                    <input type="time" name="time" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" name="venue" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Item Borrowed</label>
                                    <input type="text" name="item_borrowed" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" name="department" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Course/Program</label>
                                    <input type="text" name="course_program" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Signature</label>
                                    <input type="text" name="signature" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-buttons">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="index.php" class="btn btn-cancel">Cancel</a>
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
