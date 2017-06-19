<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipmentController
 *
 * @author Dương
 */
class equipmentController {
    //put your code here
    function index(){
        $eqItemNo = isset($_GET["eqItemNo"])?$_GET["eqItemNo"]:NULL;
        $eqName = isset($_GET["eqName"])?$_GET["eqName"]:NULL;
        $eqQuantity = isset($_GET["eqQuantity"])?$_GET["eqQuantity"]:NULL;
        $eqSemiQuan = isset($_GET["eqSemiQuan"])?$_GET["eqSemiQuan"]:NULL;
        $eqQuan = isset($_GET["eqQuan"])?$_GET["eqQuan"]:NULL;
        $eqProcessStream = isset($_GET["eqProcessStream"])?$_GET["eqProcessStream"]:NULL;
        $eqPressure = isset($_GET["eqPressure"])?$_GET["eqPressure"]:NULL;
        $eqPHA = isset($_GET["eqPHA"])?$_GET["eqPHA"]:NULL;
        $eqBusinessLoss = isset($_GET["eqBusinessLoss"])?$_GET["eqBusinessLoss"]:NULL;
        $eqProcessStreamFluid = isset($_GET["eqProcessStreamFluid"])?$_GET["eqProcessStreamFluid"]:NULL;
        $eqOperatingPressure = isset($_GET["eqOperatingPressure"])?$_GET["eqOperatingPressure"]:NULL;
        $eqPHARate = isset($_GET["eqPHARate"])?$_GET["eqPHARate"]:NULL;
        $eqBusinessLossValue = isset($_GET["eqBusinessLossValue"])?$_GET["eqBusinessLossValue"]:NULL;
        $eqGroup = isset($_GET["eqGroup"])?$_GET["eqGroup"]:NULL;
        $eqType = isset($_GET["eqType"])?$_GET["eqType"]:NULL;
        $eqDescription = isset($_GET["eqDescription"])?$_GET["eqDescription"]:NULL;
        $eqUnitCode = isset($_GET["eqUnitCode"])?$_GET["eqUnitCode"]:NULL;
        $data = array(
            "ItemNo" => $eqItemNo,
            "Name" => $eqName,
            "Qty" => $eqQuantity,
            "Semi-Qualitative" => $eqSemiQuan,
            "Quanlitative" => $eqQuan,
            "ProcessStream" => $eqProcessStream,
            "Pressure" => $eqPressure,
            "PHA" => $eqPHA,
            "Business" => $eqBusinessLoss,
            "ProcessStreamFluid" => $eqProcessStreamFluid,
            "OperatingPressure" => $eqOperatingPressure,
            "PHARating" => $eqPHARate,
            "BusinessLossValue" => $eqBusinessLossValue,
            "Group" => $eqGroup,
            "Type" => $eqType,
            "EquipmentDescription" => $eqDescription,
            "tbl_equipmentforrbi_UnitCode" => $eqUnitCode
        );
        if($eqItemNo != ""){
            if (!file_exists("../../Model/home/equipmentModel.php")) {                
                require '../../Controller/404.php';
                return;
            }            
            require ("../../Model/home/equipmentModel.php");
            $newModel = new equipmentModel();
            if($newModel->isExist($eqItemNo)){
                
            }
            else {
                $newModel->insertEquipment($data);
            }
        }
    }
}
