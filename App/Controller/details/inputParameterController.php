<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inputParameterController
 *
 * @author Dương
 */
class inputParameterController {
    //put your code here
    function __construct() {
        //do nothing here
    }
    function index(){
//        $left_menu = isset($_GET["left"])?$_GET["left"]:NULL;
//        if($left_menu!==NULL){
//            if (!file_exists("$this->app_path/$this->viewPath/$this->leftmenu/$left_menu.php")) {
//                require ("$this->app_path/$this->controllerPath/404.php");
//                return;
//            } 
//            require ("$this->app_path/$this->viewPath/$this->leftmenu/$left_menu.php");
//        }
       
        $url = "../../View/home/index.php?data=home&action=newEquipment&left=home_left";
        header('Location: '.$url);
    }
}

$inputParam = new inputParameterController();
$inputParam->index();
