<?php session_start();  ?>
<?php

spl_autoload_register(function($class) {
 require_once $_SERVER['DOCUMENT_ROOT'].'/ite601/classes/' . $class . '.php';
});

