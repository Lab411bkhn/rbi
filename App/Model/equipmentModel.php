<?php
/**
 * Description of equipmentModel
 *
 * @author Dương
 */
require_once 'database.php';
class equipmentModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    function setEquipment($eq) {
        //$this->userName = $userName;
    }
    
    public function getAllEquipmentUnitCode() {
        return $this->get_list('tbl_equipmentforrbi',"UnitCode");
    }
}
