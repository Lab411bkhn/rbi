<?php
require_once '../../Model/database.php';
class componentModel extends database{
    function __construct(){

    }
    //put your code here
    function getAllComponent(){
        return $this ->get_list_assoc('tbl_component','componentName');
    }

    function insertComponent($data){
        //print_r($data);

        $this->insert('tbl_component',$data);

    }
    function deleteComponent($Name){
        foreach($Name as $val){
            $this->removecpn($val);
        }
    }
    function  getAllComponent_name(){
        return $this->get_list_assoc('tbl_risksummary','tbl_component_componentName');
    }
    function getRowComponentName($param){
        $de = $this->get_row('tbl_risksummary','*',"tbl_component_componentName='".$param."'");
        return $de;
    }
    function getAllPrameters(){
        $arr = $this->get_list_assoc('tbl_risksummary','*');
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

$demo = new componentModel();
$arr = $demo->getAllComponent();
//print_r($arr);
