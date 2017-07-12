<?php
require_once '../../Model/libraries/excel_reader.php';

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
ob_start();
class equipmentController {
    function __construct() {
        require_once ("../../Model/home/equipmentModel.php");
       // $this->equ = new equipmentModel();
        $this->newModel = new equipmentModel();
        $this->MaxSize = 50 ;
    }
    //put your code here
    function index(){
        if(isset($_GET["act"])){
            if($_GET["act"]=='delete'){
                $eqItemNoStr = isset($_GET["eqItemNo"])?$_GET["eqItemNo"]:NULL;
                $eqItemNo = json_decode($eqItemNoStr);
                $this->newModel->deleteEquipment($eqItemNo);

               // echo "DUONG DELETE".$eqItemNoStr;
            }
        }
        else {
            $eqItemNo = isset($_GET["eqItemNo"])?$_GET["eqItemNo"]:"";
            $eqName = isset($_GET["eqName"])?$_GET["eqName"]:"";
            $eqQuantity = isset($_GET["eqQuantity"])?$_GET["eqQuantity"]:"";
            $eqSemiQuan = isset($_GET["eqSemiQuan"])?$_GET["eqSemiQuan"]:"";
            $eqQuan = isset($_GET["eqQuan"])?$_GET["eqQuan"]:"";
            $eqProcessStream = isset($_GET["eqProcessStream"])?$_GET["eqProcessStream"]:"";
            $eqPressure = isset($_GET["eqPressure"])?$_GET["eqPressure"]:"";
            $eqPHA = isset($_GET["eqPHA"])?$_GET["eqPHA"]:"";
            $eqBusinessLoss = isset($_GET["eqBusinessLoss"])?$_GET["eqBusinessLoss"]:"";
            $eqProcessStreamFluid = isset($_GET["eqProcessStreamFluid"])?$_GET["eqProcessStreamFluid"]:"";
            $eqOperatingPressure = isset($_GET["eqOperatingPressure"])?$_GET["eqOperatingPressure"]:"";
            $eqPHARate = isset($_GET["eqPHARate"])?$_GET["eqPHARate"]:"";
            $eqBusinessLossValue = isset($_GET["eqBusinessLossValue"])?$_GET["eqBusinessLossValue"]:"";
            $eqGroup = isset($_GET["eqGroup"])?$_GET["eqGroup"]:"";
            $eqType = isset($_GET["eqType"])?$_GET["eqType"]:"";
            $eqDescription = isset($_GET["eqDescription"])?$_GET["eqDescription"]:"";
            $eqUnitCode = isset($_GET["eqUnitCode"])?$_GET["eqUnitCode"]:"";
            $data = array(
                "ItemNo" => $eqItemNo,
                "Name" => $eqName,
                "Qty" => $eqQuantity,
                "SemiQualitative" => $eqSemiQuan,
                "Quanlitative" => $eqQuan,
                "ProcessStream" => $eqProcessStream,
                "Pressure" => $eqPressure,
                "PHA" => $eqPHA,
                "Business" => $eqBusinessLoss,
                "ProcessStreamFluid" => $eqProcessStreamFluid,
                "OperatingPressure" => $eqOperatingPressure,
                "PHARating" => $eqPHARate,
                "BusinessLossValue" => $eqBusinessLossValue,
                "EquipmentGroup" => $eqGroup,
                "Type" => $eqType,
                "EquipmentDescription" => $eqDescription,
                "tbl_equipmentforrbi_UnitCode" => $eqUnitCode
            );
            if($eqItemNo != ""){
                if (!file_exists("../../Model/home/equipmentModel.php")) {                
                    require '../../Controller/404.php';
                    return;
                }            
              //  $newModel = new equipmentModel();
               // if($newModel->isExist($eqItemNo)){

              //  }
               // else {
                    //print_r($data);
                    $this->newModel->insertEquipment($data);
               // }
            }
        }
    }

    function importData() {
        $excel = new PhpExcelReader;
        if(isset($_POST["Import"]))
        {
            $filename=$_FILES["file"]["tmp_name"];
            $col =2;
            if($_FILES["file"]["size"] > 0)
            {
                $excel->read($filename);
                for($row=6;$row<$this->MaxSize;$row++){
                    if(($excel->sheets[1]['cells'][$row][2]) === 'Item No.') {
                       // echo $excel->sheets[1]['cells'][$row][$col];
                       // echo "DONG:".$row;
                       // $col = 1;
                        $row +=1;
                        while(++$row){
                            try{

                                $eqItemNo = $excel->sheets[1]['cells'][$row][2];
                                $eqName = $excel->sheets[1]['cells'][$row][3];
                                $eqQuantity = $excel->sheets[1]['cells'][$row][4];
                                $eqSemiQuan = $excel->sheets[1]['cells'][$row][5];
                                $eqQuan = $excel->sheets[1]['cells'][$row][6];
                                $eqProcessStream =$excel->sheets[1]['cells'][$row][8];
                                $eqPressure = $excel->sheets[1]['cells'][$row][9];
                                $eqPHA = $excel->sheets[1]['cells'][$row][10];
                                $eqBusinessLoss = $excel->sheets[1]['cells'][$row][11];
                                $eqProcessStreamFluid = $excel->sheets[1]['cells'][$row][13];
                                $eqOperatingPressure = $excel->sheets[1]['cells'][$row][14];
                                $eqPHARate = $excel->sheets[1]['cells'][$row][15];
                                $eqBusinessLossValue = $excel->sheets[1]['cells'][$row][16];
                               // $eqGroup = $excel->sheets[1]['cells'][$row][16];
                             //   $eqType = $excel->sheets[1]['cells'][$row][17];
                               // $eqDescription = $excel->sheets[1]['cells'][$row][18];
                               // $eqUnitCode = $excel->sheets[1]['cells'][$row][17];
                                $data = array(
                                    "ItemNo" => $eqItemNo,
                                    "Name" => $eqName,
                                    "Qty" => $eqQuantity,
                                    "SemiQualitative" => $eqSemiQuan,
                                    "Quanlitative" => $eqQuan,
                                    "ProcessStream" => $eqProcessStream,
                                    "Pressure" => $eqPressure,
                                    "PHA" => $eqPHA,
                                    "Business" => $eqBusinessLoss,
                                    "ProcessStreamFluid" => $eqProcessStreamFluid,
                                    "OperatingPressure" => $eqOperatingPressure,
                                    "PHARating" => $eqPHARate,
                                    "BusinessLossValue" => $eqBusinessLossValue,
                                   // "EquipmentGroup" => $eqGroup,
                                   // "Type" => $eqType,
                                   // "EquipmentDescription" => $eqDescription,
                                   // "tbl_equipmentforrbi_UnitCode" => $eqUnitCode
                                );
                                if($eqName != ""){

                                    $this->newModel->insertEquipment($data);
                                    // }
                                }

                                else
                                    return;
                            } catch (Exception $ex) {
                                return;
                            }
                          //  echo $excel->sheets[0]['cells'][$row][$col];
                            //$this->eqUnit->insertEquipmentUnit($equUnitCode, $equName, $equProcessSytem);
                        }
                        return;
                  }

                }
            }
            else
                echo 'Invalid File:Please Upload CSV File';
        }
    }
}

$equIndex = new equipmentController();
$equIndex->index();
$equIndex->importData();
header('Location: ../../View/home/index.php?data=home&action=listEquipment&left=home_left');
ob_end_flush();

