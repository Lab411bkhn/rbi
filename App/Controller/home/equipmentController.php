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
    function __construct() {
        require_once ("../../Model/home/equipmentModel.php");
        $this->equ = new equipmentModel();
    }
    //put your code here
    function index(){
        if(isset($_GET["act"])){
            if($_GET["act"]=='delete'){
                $eqItemNoStr = isset($_GET["eqItemNo"])?$_GET["eqItemNo"]:NULL;
                $eqItemNo = json_decode($eqItemNoStr);
                $this->equ->deleteEquipment($eqItemNo);
                //echo "DUONG DELETE".$eqItemNoStr;
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
                $newModel = new equipmentModel();
                if($newModel->isExist($eqItemNo)){

                }
                else {
                    //print_r($data);
                    $newModel->insertEquipment($data);
                }
            }
        }
    }
    
    function importData() {
        $excel = new PhpExcelReader;
        if(isset($_POST["Import"]))
        {
            echo $filename=$_FILES["file"]["tmp_name"];
            if($_FILES["file"]["size"] > 0)
            {
                $excel->read($filename);
                //$excel->read('test.xls');
                $nr_sheets = count($excel->sheets);       // gets the number of sheets
                $excel_data = '';              // to store the the html tables with data of each sheet
                // traverses the number of sheets and sets html table with each sheet data in $excel_data
//                for($i=0; $i<$nr_sheets; $i++) {
//                    $excel_data .= '<h4>Sheet '.($i + 1).' (<em>'.$excel->boundsheets[$i]['name'].'</em>)</h4>'.$this->sheetData($excel->sheets[$i]).'<br/>';  
//                }   
                //echo '<em>'.$excel->boundsheets[0]['name'].'</em>';
                //echo $this->sheetData($excel->sheets[0]);
                //echo $excel->sheets[0]['cells'][4][3];
                for($row=1;$row<$this->MAXSIZE;$row++){
                    if(($excel->sheets[0]['cells'][$row][1]) == 'Unit Code') {
                        echo "DONG:".$row;
                        $col = 1;
                        while(++$row){
                            try{
                                $equUnitCode = $excel->sheets[0]['cells'][$row][1];
                                $equName = $excel->sheets[0]['cells'][$row][2];
                                $equProcessSytem = $excel->sheets[0]['cells'][$row][3];
                                if(is_numeric($equUnitCode)&&($equName!="")&&$equProcessSytem!="")
                                    $this->eqUnit->insertEquipmentUnit($equUnitCode, $equName, $equProcessSytem);
                                else                                    
                                    return;
                            } catch (Exception $ex) {
                                return;
                            }
                            //echo $excel->sheets[0]['cells'][$row][$col];
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
//$equIndex->importData();
header('Location: ../../View/home/index.php?data=home&action=listEquipment&left=home_left');
