<?php
require_once '../../Model/database.php';
class equipmentModel extends database {
    //put your code here
    function __construct() {        
    }
    
    function getAllEquipment() {
        return $this->get_list_assoc('tbl_equipmentlist','*');
    }
    
    function insertEquipment($data){
        $this->insert('tbl_equipmentlist', $data);
        //print_r($data);
    }
    
    function isExist($unitCode){
        return FALSE;
    }
    function deleteEquipment($eqItemNo){
        foreach ($eqItemNo as $val) {
           // echo $val;
            $sql = " DELETE FROM tbl_equipment WHERE  ItemNo = '.$val.'";

          //  $this->remove('tbl_equipmentlist', 'ItemNo ='.$val.'');
        }
    }
}

$demo = new equipmentModel();
$dat = array('C04301');
echo $demo->deleteEquipment($dat);


