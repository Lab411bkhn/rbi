<?php
require_once './connectSql.php';
class demo extends database{
    //put your code here
    function getUser($username) {
        $sql = "select * from user where username='".$username."'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
