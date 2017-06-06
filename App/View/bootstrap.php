<?php //
    class bootstrap
    {
        function __construct() {
            //require '../App/Model/connectSql.php';
            //require '../../App/Controller/';
            $this->app_path = "../../../App";
            $this->controllerPath = "Controller";
            $this->viewPath = "View";
            $this->modelPath = "Model";
        }
             
        function init(){                
            $controller = isset($_GET["data"])?$_GET["data"]:NULL;
            if($controller!==NULL){
                if (!file_exists("$this->app_path/$this->controllerPath/$controller.php")) {
                    require ("$this->app_path/$this->controllerPath/404.php");
                    return;
                } 
                require ("$this->app_path/$this->controllerPath/$controller.php");
                
                if (!class_exists($controller)) {
                    require ("$this->app_path/$this->controllerPath/404.php");
                    return;
                } 
                
                $data = new $controller;
                $action = isset($_GET["action"])?$_GET["action"]:"index";
                $tab = isset($_GET["tab"])?$_GET["tab"]:"";
                if (method_exists($data, $action)) {
                    $data->$action($tab);
                }
            }
        } 
    }