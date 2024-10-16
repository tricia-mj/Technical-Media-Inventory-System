<?php include "core/initialize.php"; ?>
<?php 

		$username = $_POST['username'];
		$password = $_POST['password'];

		$user = new User();
		$user->username = $username;
		$user->password = $password;

		$user->create();


	 	 header('Location: http://localhost/ITE601');
  		exit;




		





 ?>