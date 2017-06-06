<?php
//require_once 'database.php';
class user{
    //put your code here
    private $userName;
//    function __construct($userName) {
//        echo "<h2>Khoi tao user</h2>";
//        $this->userName = $userName;
//    }
    
    function user($userName){
        $this->userName = $userName;
    }
    
    function setUser($userName) {
        $this->userName = $userName;
    }
    
    public function getUser($username) {
//        $sql = "select * from user where username='".$username."'";
//        $this->setQuery($sql);
//        return $this->loadAllRows();
    }
    
    public function getUserAll() {
//        $sql = "select * from user";
//        $this->setQuery($sql);
//        return $this->loadAllRows();
    }
    
}

