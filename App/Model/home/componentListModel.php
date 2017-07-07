<?php
require_once '../../Model/database.php';
class componentListModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    function getAllComponent(){
        return $this->get_list_assoc('tbl_component', '*');        
    }

    
    function getAllPrameters(){
        $arr = $this->get_list_assoc('tbl_component', '*');
        $outParams = array();
        $ti = "";
        if(count($arr)>0){
            foreach ($arr[0] as $key => $value) {
                array_push($outParams, $key);
                //$ti.=$key;
            }
        }
        return $outParams;
    }
}
