<?php //
    class bootstrap
    {
        function __construct() {
            //require '../App/Model/connectSql.php';
            $this->app_path = "../";
            $this->controllerPath = "../Controller";
            $this->viewPath = "../Controller";
            $this->modelPath = "../Controller";
        }
             
        function init(){    
//            $app_path = "../App";
//            $controllerPath = "../App/Controller";
//            $viewPath = "../App/Controller";
//            $modelPath = "../App/Controller";
            
            $controller = isset($_GET["data"])?$_GET["data"]:NULL;
            if($controller!==NULL){
                echo "<br>Data nhan duoc: ".$controller."<br/>";
                if (!file_exists("$this->controllerPath/$controller.php")) {
                    require ("$this->controllerPath/404.php");
                    return;
                } 
                require ("$this->controllerPath/$controller.php");
                
                if (!class_exists($controller)) {
                    require ("$this->controllerPath/404.php");
                    return;
                } 
                
                $data = new $controller;
                $action = isset($_GET["action"])?$_GET["action"]:"index";
                if (method_exists($data, $action)) {
                    $data->$action();
                }
            }
        } 
    }