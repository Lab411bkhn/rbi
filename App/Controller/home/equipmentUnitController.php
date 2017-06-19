<?php
require_once '../../Model/libraries/excel_reader.php';
class equipmentUnitController {
    //put your code here
    function __construct() {
        //require '../../Model/home/equipmentUnitModel.php';
    }
    
    function index(){
        $equUnitCode = isset($_GET["equUnitCode"])?$_GET["equUnitCode"]:NULL;
        $equName = isset($_GET["equName"])?$_GET["equName"]:NULL;
        $equProcessSytem = isset($_GET["equProcessSytem"])?$_GET["equProcessSytem"]:NULL;
        if($equUnitCode != "" && $equName != "" && $equProcessSytem!= ""){
            if (!file_exists("../../Model/home/equipmentUnitModel.php")) {                
                require '../../Controller/404.php';
                return;
            }            
            require ("../../Model/home/equipmentUnitModel.php");
            $eqUnit = new equipmentUnitModel();
            $eqUnit->insertEquipmentUnit($equUnitCode, $equName, $equProcessSytem);
        }
    }
    
    function sheetData($sheet) {
        $re = '<table>';     // starts html table
        $x = 1;
        while($x <= $sheet['numRows']) {
            $re .= "<tr>\n";
            $y = 1;
            while($y <= $sheet['numCols']) {
                $cell = isset($sheet['cells'][$x][$y]) ? $sheet['cells'][$x][$y] : '';
                $re .= " <td>$cell</td>\n";  
                $y++;
            }  
            $re .= "</tr>\n";
            $x++;
        }
        return $re .'</table>';     // ends and returns the html table
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
                for($i=0; $i<$nr_sheets; $i++) {
                    $excel_data .= '<h4>Sheet '.($i + 1).' (<em>'.$excel->boundsheets[$i]['name'].'</em>)</h4>'.$this->sheetData($excel->sheets[$i]).'<br/>';  
                }   
                echo $excel_data;
            }
            else
                echo 'Invalid File:Please Upload CSV File';
        }
    }
}
    
$equIndex = new equipmentUnitController();
$equIndex->index();
$equIndex->importData();
//header('Location: ../../View/home/index.php?data=home&action=newEquipmentUnit&left=equipment_left');

