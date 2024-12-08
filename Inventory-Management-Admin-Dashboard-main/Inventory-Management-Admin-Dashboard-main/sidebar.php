<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSAB Technical Media Inventory System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar .sidebar-header {
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            color: #adb5bd; /* Muted color for headers */
        }
        .sidebar .sub-item {
            padding-left: 30px; /* Indent sub-items */
            font-size: 14px;
        }
        .sidebar a i {
            color: white; /* Ensures icons are visible */
        }
        .sidebar .logo {
            display: block;
            margin: 0 auto;
            max-width: 200px; /* Adjust logo size */
            margin-bottom: 20px; /* Add space below the logo */
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Logo -->
        <img src="assets/logo.png" alt="Logo" class="logo">
        
        <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
        <div class="sidebar-header">Transaction</div>
        <a href="index.php" class="sub-item"><i class="fas fa-book"></i> Borrowed</a>
        <a href="return_items.php" class="sub-item"><i class="fas fa-undo"></i> Returned</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
