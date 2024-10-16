<?php

class User extends DBObject  {

    public $id;
    public $username;
    public $password;

    
    protected static $table = "users";
    public static $fields = array('id', 'username','password');


    public function securePassword():  string {
        return md5($this->password);
    }

}