<?php
require_once '../../Model/database.php';
class equipmentListModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    function getAllEquipment(){
        return $this->get_list_assoc('tbl_equipmentlist', '*');        
    }
    
    function getAllPrameters(){
        $arr = $this->get_list_assoc('tbl_equipmentlist', '*');
        $outParams = array();
        $ti = "";
        foreach ($arr[0] as $key => $value) {
            array_push($outParams, $key);
            //$ti.=$key;
        }
        return $outParams;
    }
}
