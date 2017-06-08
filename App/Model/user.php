<?php
require_once 'database.php';
class user extends database{
    //put your code here
    private $userName;
    function __construct() {
        //echo "<h2>Khoi tao user</h2>";
        //$this->userName = $userName;
    }
    
//    function user($userName){
//        //echo "<h2>Khoi tao user</h2>";
//        $this->userName = $userName;
//    }
    
    function setUser($userName) {
        $this->userName = $userName;
    }
    
    public function getUser($username) {
//        $sql = "select * from user where username='".$username."'";
//        $this->setQuery($sql);
//        return $this->loadAllRows();
        return $this->get_row('user',"*","username='$username'");
    }
    
    public function getUserAll() {
//        $sql = "select * from user";
//        $this->setQuery($sql);
//        return $this->loadAllRows();
        return $this->get_list('user',"*");
    }
    
}

//$user = new user();
//$us = $user->getUserAll();
//foreach ($us as $value) {
//    echo $value['info'];
//}

