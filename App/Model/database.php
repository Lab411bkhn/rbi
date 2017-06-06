<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*$con = mysqli_connect("localhost","root","","rbi");
echo "Connect Successful";

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/

class database{
    var $_dbh = 'localhost';
    var $_sql = 'root';
    var $_cursor = NULL;        
    
    public function database() 
    {
        try
        {
            $this->_dbh = new PDO('mysql:host=localhost; dbname=rbi','root','');
            //$this->_dbh->query('set names "utf8"');
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
            die(); 
        }
    }
    
    public function setQuery($sql) {
        $this->_sql = $sql;
    }
    
    //Function execute the query 
//    public function execute($options=array()) 
//    {
//        $this->_cursor = $this->_dbh->prepare($this->_sql);
//        if($options) {  //If have $options then system will be tranmission parameters
//            for($i=0;$i<count($options);$i++) {
//                $this->_cursor->bindParam($i+1,$options[$i]);
//            }
//        }
//        $this->_cursor->execute();
//        return $this->_cursor;
//    }
//    
//    //Funtion load datas on table
//    public function loadAllRows($options=array()) {
//        if(!$options) {
//            if(!$result = $this->execute())
//                return false;
//        }
//        else {
//            if(!$result = $this->execute($options))
//                return false;
//        }
//        return $result->fetchAll(PDO::FETCH_OBJ);
//    }
//    
//    //Funtion load 1 data on the table
//    public function loadRow($option=array()) {
//        if(!$option) {
//            if(!$result = $this->execute())
//                return false;
//        }
//        else {
//            if(!$result = $this->execute($option))
//                return false;
//        }
//        return $result->fetch(PDO::FETCH_OBJ);
//    }
//    
//    //Function count the record on the table
//    public function loadRecord($option=array()) {
//        if(!$option) {
//            if(!$result = $this->execute())
//                return false;
//        }
//        else {
//            if(!$result = $this->execute($option))
//                return false;
//        }
//        return $result->fetch(PDO::FETCH_COLUMN);
//    }
    
    public function getLastId() {
        return $this->_dbh->lastInsertId();
    }
    
    public function disconnect() {
        $this->_dbh = NULL;
    }
}

$da = new database();