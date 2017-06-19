<?php
require_once '../../Model/database.php';
/**
 * Description of equipmentUnitListModel
 *
 * @author Dương
 */
class equipmentUnitListModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    function getAllEquipmentUnit(){
        return $this->get_list_assoc('tbl_equipmentforrbi', '*');        
    }
    
    function getAllPrameters(){
        $arr = $this->get_list_assoc('tbl_equipmentforrbi', '*');
        $outParams = array();
        $ti = "";
        foreach ($arr[0] as $key => $value) {
            array_push($outParams, $key);
            //$ti.=$key;
        }
        return $outParams;
    }
}

//$demo = new equipmentUnitListModel();
//$arr = $demo->getAllPrameters();
//foreach ($arr as $key => $value) {
//    echo $value."|";
//}
