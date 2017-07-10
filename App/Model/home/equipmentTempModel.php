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
    function  deleteEquipmentTem($pltName){
        //$this->connect();
        foreach($pltName as $val) {
            echo $val;
           // $sql = "DELETE FROM tbl_equipmenttemp WHERE Plant = '" . $val . "'";
           // mysql_query($sql);

            $this->removeeqTem($val);
        }
    }
    function isExist($unitCode){
        return FALSE;
    }
}
$eq = new equipmentTempModel();
$data = array('CMFP');
$eq->deleteEquipmentTem($data);
