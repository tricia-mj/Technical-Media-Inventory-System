<?php
require 'Database.php';
require 'BorrowRecord.php';

// Create a new Database object and BorrowRecord object
$db = new Database();
$borrowRecord = new BorrowRecord($db->getConnection());
?>



<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Items List</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Update with correct path -->
</head>
<body>
    <div class="container">
        <h2 class="mt-4">List of Borrowed Items</h2>
        <a href="add_record.php" class="btn btn-primary mb-4">Add New Record</a>

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





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Dreams Pos admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="">
</a>
<a href="index.html" class="logo-small">
<img src="assets/img/logo-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#">
<div class="searchinputs">
<input type="text" placeholder="Search Here ...">
<div class="search-addon">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</div>
</div>
<a class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
</form>
</div>
</li>


<li class="nav-item dropdown has-arrow flag-nav">
<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
<img src="assets/img/flags/us1.png" alt="" height="20">
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/us.png" alt="" height="16"> English
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/fr.png" alt="" height="16"> French
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/de.png" alt="" height="16"> German
</a>
</div>
</li>


<li class="nav-item dropdown">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<img src="assets/img/icons/notification-bing.svg" alt="img"> <span class="badge rounded-pill">4</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-06.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt="" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.html">View all Notifications</a>
</div>
</div>
</li>

<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6>John Doe</h6>
<h5>Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="signin.html"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="generalsettings.html">Settings</a>
<a class="dropdown-item" href="signin.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<a href="index.html"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="productlist.html" class="active">Product List</a></li>
<li><a href="addproduct.html">Add Product</a></li>
<li><a href="categorylist.html">Category List</a></li>
<li><a href="addcategory.html">Add Category</a></li>
<li><a href="subcategorylist.html">Sub Category List</a></li>
<li><a href="subaddcategory.html">Add Sub Category</a></li>
<li><a href="brandlist.html">Brand List</a></li>
<li><a href="addbrand.html">Add Brand</a></li>
<li><a href="importproduct.html">Import Products</a></li>
<li><a href="barcode.html">Print Barcode</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="saleslist.html">Sales List</a></li>
<li><a href="pos.html">POS</a></li>
<li><a href="pos.html">New Sales</a></li>
<li><a href="salesreturnlists.html">Sales Return List</a></li>
<li><a href="createsalesreturns.html">New Sales Return</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="purchaselist.html">Purchase List</a></li>
<li><a href="addpurchase.html">Add Purchase</a></li>
<li><a href="importpurchase.html">Import Purchase</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/expense1.svg" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="expenselist.html">Expense List</a></li>
<li><a href="createexpense.html">Add Expense</a></li>
<li><a href="expensecategory.html">Expense Category</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/quotation1.svg" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="quotationList.html">Quotation List</a></li>
<li><a href="addquotation.html">Add Quotation</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/transfer1.svg" alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="transferlist.html">Transfer List</a></li>
<li><a href="addtransfer.html">Add Transfer </a></li>
<li><a href="importtransfer.html">Import Transfer </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/return1.svg" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="salesreturnlist.html">Sales Return List</a></li>
<li><a href="createsalesreturn.html">Add Sales Return </a></li>
<li><a href="purchasereturnlist.html">Purchase Return List</a></li>
<li><a href="createpurchasereturn.html">Add Purchase Return </a></li>
</ul>
</li>
<li>
<a href="components.html"><i data-feather="layers"></i><span> Components</span> </a>
</li>
<li>
<a href="blankpage.html"><i data-feather="file"></i><span> Blank Page</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="error-404.html">404 Error </a></li>
<li><a href="error-500.html">500 Error </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="sweetalerts.html">Sweet Alerts</a></li>
<li><a href="tooltip.html">Tooltip</a></li>
<li><a href="popover.html">Popover</a></li>
<li><a href="ribbon.html">Ribbon</a></li>
<li><a href="clipboard.html">Clipboard</a></li>
<li><a href="drag-drop.html">Drag & Drop</a></li>
<li><a href="rangeslider.html">Range Slider</a></li>
<li><a href="rating.html">Rating</a></li>
<li><a href="toastr.html">Toastr</a></li>
<li><a href="text-editor.html">Text Editor</a></li>
<li><a href="counter.html">Counter</a></li>
<li><a href="scrollbar.html">Scrollbar</a></li>
<li><a href="spinner.html">Spinner</a></li>
<li><a href="notification.html">Notification</a></li>
<li><a href="lightbox.html">Lightbox</a></li>
<li><a href="stickynote.html">Sticky Note</a></li>
<li><a href="timeline.html">Timeline</a></li>
<li><a href="form-wizard.html">Form Wizard</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="chart-apex.html">Apex Charts</a></li>
<li><a href="chart-js.html">Chart Js</a></li>
<li><a href="chart-morris.html">Morris Charts</a></li>
<li><a href="chart-flot.html">Flot Charts</a></li>
<li><a href="chart-peity.html">Peity Charts</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="award"></i><span> Icons </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
<li><a href="icon-feather.html">Feather Icons</a></li>
<li><a href="icon-ionic.html">Ionic Icons</a></li>
<li><a href="icon-material.html">Material Icons</a></li>
<li><a href="icon-pe7.html">Pe7 Icons</a></li>
<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
<li><a href="icon-themify.html">Themify Icons</a></li>
<li><a href="icon-weather.html">Weather Icons</a></li>
<li><a href="icon-typicon.html">Typicon Icons</a></li>
<li><a href="icon-flag.html">Flag Icons</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html">Form Mask </a></li>
<li><a href="form-validation.html">Form Validation </a></li>
<li><a href="form-select2.html">Form Select2 </a></li>
<li><a href="form-fileupload.html">File Upload </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="layout"></i> <span> Table </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Application</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="chat.html">Chat</a></li>
<li><a href="calendar.html">Calendar</a></li>
<li><a href="email.html">Email</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="customerlist.html">Customer List</a></li>
<li><a href="addcustomer.html">Add Customer </a></li>
<li><a href="supplierlist.html">Supplier List</a></li>
<li><a href="addsupplier.html">Add Supplier </a></li>
<li><a href="userlist.html">User List</a></li>
<li><a href="adduser.html">Add User</a></li>
<li><a href="storelist.html">Store List</a></li>
<li><a href="addstore.html">Add Store</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/places.svg" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="newcountry.html">New Country</a></li>
<li><a href="countrieslist.html">Countries list</a></li>
<li><a href="newstate.html">New State </a></li>
<li><a href="statelist.html">State list</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="purchaseorderreport.html">Purchase order report</a></li>
<li><a href="inventoryreport.html">Inventory Report</a></li>
<li><a href="salesreport.html">Sales Report</a></li>
<li><a href="invoicereport.html">Invoice Report</a></li>
<li><a href="purchasereport.html">Purchase Report</a></li>
<li><a href="supplierreport.html">Supplier Report</a></li>
<li><a href="customerreport.html">Customer Report</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="newuser.html">New User </a></li>
<li><a href="userlists.html">Users List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="generalsettings.html">General Settings</a></li>
<li><a href="emailsettings.html">Email Settings</a></li>
<li><a href="paymentsettings.html">Payment Settings</a></li>
<li><a href="currencysettings.html">Currency Settings</a></li>
<li><a href="grouppermissions.html">Group Permissions</a></li>
<li><a href="taxrates.html">Tax Rates</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product List</h4>
<h6>Manage your products</h6>
</div>
<div class="page-btn">
<a href="addproduct.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product</a>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
<a class="btn btn-filter" id="filter_search">
<img src="assets/img/icons/filter.svg" alt="img">
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
</li>
</ul>
</div>
</div>

<div class="card mb-0" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-12 col-sm-12">
<div class="row">
<div class="col-lg col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Choose Product</option>
<option>Macbook pro</option>
<option>Orange</option>
</select>
</div>
</div>
<div class="col-lg col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Choose Category</option>
<option>Computers</option>
<option>Fruits</option>
</select>
</div>
</div>
<div class="col-lg col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Choose Sub Category</option>
<option>Computer</option>
</select>
</div>
</div>
<div class="col-lg col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Brand</option>
<option>N/D</option>
</select>
</div>
</div>
<div class="col-lg col-sm-6 col-12 ">
<div class="form-group">
<select class="select">
<option>Price</option>
<option>150.00</option>
</select>
</div>
</div>
<div class="col-lg-1 col-sm-6 col-12">
<div class="form-group">
<a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table  datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>Item</th>
<th>Borrowed By</th>
<th>Department</th>
<th>Course/Program</th>
<th>Signature</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product1.jpg" alt="product">
</a>
<a href="javascript:void(0);">Macbook pro</a>
</td>
<td>PT001</td>
<td>Computers</td>
<td>N/D</td>
<td>1500.00</td>
<td>pc</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product2.jpg" alt="product">
</a>
<a href="javascript:void(0);">Orange</a>
</td>
<td>PT002</td>
<td>Fruits</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product3.jpg" alt="product">
</a>
<a href="javascript:void(0);">Pineapple</a>
</td>
<td>PT003</td>
<td>Fruits</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product4.jpg" alt="product">
</a>
<a href="javascript:void(0);">Strawberry</a>
</td>
<td>PT004</td>
<td>Fruits</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product5.jpg" alt="product">
</a>
<a href="javascript:void(0);">Avocat</a>
</td>
<td>PT005</td>
<td>Accessories</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>150.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product6.jpg" alt="product">
</a>
<a href="javascript:void(0);">Macbook Pro</a>
</td>
<td>PT006</td>
<td>Shoes</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product7.jpg" alt="product">
</a>
<a href="javascript:void(0);">Apple Earpods</a>
</td>
<td>PT007</td>
<td>Shoes</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>100.00</td>
 <td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product8.jpg" alt="product">
</a>
<a href="javascript:void(0);">iPhone 11	</a>
</td>
<td>PT008</td>
<td>Fruits</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product9.jpg" alt="product">
</a>
<a href="javascript:void(0);">samsung	</a>
</td>
<td>PT009</td>
<td>Earphones</td>
<td>N/D</td>
<td>10.00</td>
<td>pc</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product11.jpg" alt="product">
</a>
<a href="javascript:void(0);">Banana</a>
</td>
<td>PT0010</td>
<td>Health Care	</td>
<td>N/D</td>
<td>10.00</td>
<td>kg</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="productimgname">
<a href="javascript:void(0);" class="product-img">
<img src="assets/img/product/product17.jpg" alt="product">
</a>
<a href="javascript:void(0);">Limon</a>
</td>
<td>PT0011</td>
<td>Health Care	</td>
<td>N/D</td>
<td>10.00</td>
<td>kg</td>
<td>100.00</td>
<td>Admin</td>
<td>
<a class="me-3" href="product-details.html">
<img src="assets/img/icons/eye.svg" alt="img">
</a>
<a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html> 
//