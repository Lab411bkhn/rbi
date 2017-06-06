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
    
    function newEquipment(){
        //require '../App/View/home/newEquipment.php';
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
        elseif ($tab === 'dfp') {/*Damage Factors Properties*/
            require '../../View/details/DamageFactorProperties.php';
        }
        elseif ($tab === 'cp') {/*Consequence Properties*/
            require '../../View/details/ConsequencePropertise.php';
        }
        elseif ($tab === 'result') {
            
        }
        else {/*General Properties*/
            require '../../View/details/Generalpproperties.php';
        }
        
    }
}
