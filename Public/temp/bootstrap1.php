<?php
    
    require '../App/Model/connectSql.php';
    $app_path = "../App";
    $controllerPath = "../App/Controller";
    $viewPath = "../App/Controller";
    $modelPath = "../App/Controller";

    $controller = isset($_GET["data"])?$_GET["data"]:NULL;
    if($controller!==NULL){
        echo "<br>Data nhan duoc: ".$controller."<br/>";
        if (!file_exists("$controllerPath/$controller.php") || !class_exists($controller)) {
            require ("$controllerPath/404.php");
            return;
        } 
        require ("$controllerPath/$controller.php");
        
        if (!class_exists($controller)) {
            require ("$controllerPath/404.php");
            return;
        } 
        $data = new $controller;
        $action = isset($_GET["action"])?$_GET["action"]:NULL;
        if (method_exists($data, $action)) {
            $data->$action();
        }
    }
