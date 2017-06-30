<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipmentUnitModel
 *
 * @author Dương
 */
require_once '../../Model/database.php';
class equipmentUnitModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    function insertEquipmentUnit($unitCode,$UnitName,$ProcessSystem){
        $data = array(
            "UnitCode" => $unitCode,
            "UnitName" => $UnitName,
            "ProcessSystem" => $ProcessSystem
        );
        $this->insert('tbl_equipmentforrbi', $data);
    }
    
    function deleteEquipmentUnit($unitCode){
        foreach ($unitCode as $value) {
            $this->remove('tbl_equipmentforrbi', 'UnitCode='.$value);            
        }
    }
    
    public function getAllEquipmentUnitCode() {
        return $this->get_list('tbl_equipmentforrbi',"UnitCode");
    }
}

$demo = new equipmentUnitModel();
$data = array('06');
$demo->deleteEquipmentUnit($data);
