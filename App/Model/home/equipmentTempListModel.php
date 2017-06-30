<?php
require_once '../../Model/database.php';
class equipmentTempListModel extends database{
    function __construct() {
    }
    //put your code here
    function getAllEquipmentUnit(){
        return $this->get_list_assoc('tbl_equipmenttemp', '*');        
    }
    
    //lay ten cac cot trong CSDL
    function getAllPrameters(){
        $arr = $this->get_list_assoc('tbl_equipmenttemp', '*');
        $outParams = array();
        $ti = "";
        if(count($arr)>0){
            foreach ($arr[0] as $key => $value) {
                array_push($outParams, $key);
            }
        }
        return $outParams;
    }
}
