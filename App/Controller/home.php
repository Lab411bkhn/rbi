<?php

class home {
    //put your code here
    function __construct() {
        echo "Home constructor!!!";
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
}
