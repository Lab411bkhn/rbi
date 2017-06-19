<?php
/**
 * Description of leftmenuController
 *
 * @author Dương
 */
class leftmenuController {
    //put your code here
    function __construct() {
        //do nothing here
        $this->app_path = "../../../App";
        $this->controllerPath = "Controller";
        $this->viewPath = "View";
        $this->modelPath = "Model";
        $this->leftmenu = "leftmenu";
    }
    
    function init(){
        $left_menu = isset($_GET["left"])?$_GET["left"]:"home_left";
        if($left_menu!==NULL){
            if (!file_exists("$this->app_path/$this->viewPath/$this->leftmenu/$left_menu.php")) {
                require ("$this->app_path/$this->controllerPath/404.php");
                return;
            } 
            require ("$this->app_path/$this->viewPath/$this->leftmenu/$left_menu.php");
        }
    }
}


