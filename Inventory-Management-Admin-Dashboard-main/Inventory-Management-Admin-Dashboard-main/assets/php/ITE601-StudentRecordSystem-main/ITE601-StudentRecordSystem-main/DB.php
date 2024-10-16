<?php 
class DB {

public function get() {
    $con = mysqli_connect("localhost","root","","ite601");
    $sql = "SELECT * from users";
    return $result = mysqli_query($con, $sql);
}

public function getUsers() {
    
}
    
}


?>