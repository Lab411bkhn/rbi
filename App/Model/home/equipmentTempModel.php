<?php
require_once '../../Model/database.php';
class equipmentTempModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    
    function insertTemplate($data){
        $this->insert('tbl_equipmenttemp', $data);
        //print_r($data);
    }
    function isExist($unitCode){
        return FALSE;
    }
}
