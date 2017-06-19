<?php

class home {
    //put your code here
    function __construct() {
    }
    
    function index(){
        echo "<h3>Index Action!!!</h3>";
        //require '../../View/home/newEquipment.php';
        //require '../App/View/home/index.php';        
        //header("Location: ../App/View/home/index.php");
    }
           
    function act(){
        echo "Home Action";
    }
    
    function newEquipmentUnit(){
        require '../../View/home/newEquipmentUnit.php';
    }
            
    function newEquipment(){
        require '../../View/home/newEquipment.php';        
    }
    function newComponent(){
        //require '../App/View/home/newEquipment.php';
        require '../../View/home/newComponent.php';
    }
    function detailComponent($tab){
        //require '../App/View/home/newEquipment.php';
        require '../../View/details/component_details.php';
        if($tab === 'dfs'){ /*Damage Factors Selection*/
            require '../../View/details/DamageFactorsSelect.php';
        }
        else if ($tab === 'dfp') {/*Damage Factors Properties*/
            require '../../View/details/DamageFactorProperties.php';
        }
        else if ($tab === 'cp') {/*Consequence Properties*/
            require '../../View/details/ConsequencePropertise.php';
        }
        else if ($tab === 'result') {
            
        }
        else {/*General Properties*/
            require '../../View/details/Generalpproperties.php';
        }        
    }
    
    function createFormAddDetailEquipment($item){
        require '../../View/details/inputParameter.php';
        $inputParam = new inputParameter($item);
        $inputParam->creatForm();
    }
    
    function addDetailEquipment($item){
        require '../../Model/details/inputParameterModel.php';
        $inputParam = new inputParameterModel();
    }
    
    function listEquipmentUnit(){
        require '../../View/home/equipmentUnitList.php';
    }
    
    function listEquipment(){
        require '../../View/home/equipmentList.php';
    }
    
    function listComponent(){
        require '../../View/home/equipmentList.php';
    }
}
