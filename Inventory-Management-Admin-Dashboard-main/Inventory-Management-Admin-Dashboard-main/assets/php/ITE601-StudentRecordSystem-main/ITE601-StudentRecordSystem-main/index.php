<?php include "core/initialize.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Record System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Student List</a>
        </li>
    </ul>
    
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-12">
				<br/>
			<a href="student_add.php" class="btn btn-success btn-sm">Add Student</a>
<br/><br/>

			<table class="table">
  <thead>
   


    <tr>
    
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(User::find_all() as $user ) { ?>
    

    <tr>
      <th scope="row"><?php echo $user->username; ?></th>
      <td><?php echo $user->password; ?></td>
      
      
      <td>
      	<button class="btn btn-sm btn-info">Edit</button>
      	<button class="btn btn-sm btn-danger">Delete</button>
      </td>
    </tr>



  <?php } ?>
    
  </tbody>
</table>
		</div>
	</div>
</div>

 	
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>