<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipmentModel
 *
 * @author Dương
 */
class equipmentModel {
    //put your code here
    function __construct() {
        
    }
    
    function insertEquipment($data){
        $this->insert('tbl_equipmentforrbi', $data);
    }
    function isExist($unitCode){
        return FALSE;
    }
}
