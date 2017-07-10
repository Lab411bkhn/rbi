<?php
require_once '../../Model/libraries/excel_reader.php';
class equipmentUnitController {
    //put your code here
    function __construct() {                    
        require ("../../Model/home/equipmentUnitModel.php");
        $this->eqUnit = new equipmentUnitModel();
        $this->MAXSIZE = 20;
    }
    
    function index(){
        if(isset($_GET["act"])){
            if($_GET["act"]=='delete'){
                $equUnitCodeStr = isset($_GET["equUnitCode"])?$_GET["equUnitCode"]:NULL;
                $equUnitCode = json_decode($equUnitCodeStr);
                $this->eqUnit->deleteEquipmentUnit($equUnitCode);
               // echo "DUONG DELETE";
            }
        }
        else {
            $equUnitCode = isset($_GET["equUnitCode"])?$_GET["equUnitCode"]:NULL;
            $equName = isset($_GET["equName"])?$_GET["equName"]:NULL;
            $equProcessSytem = isset($_GET["equProcessSytem"])?$_GET["equProcessSytem"]:NULL;
            if($equUnitCode != "" && $equName != "" && $equProcessSytem!= ""){
                if (!file_exists("../../Model/home/equipmentUnitModel.php")) {                
                    require '../../Controller/404.php';
                    return;
                }
                $this->eqUnit->insertEquipmentUnit($equUnitCode, $equName, $equProcessSytem);
            }
        }
    }
    
    /*function sheetData($sheet) {
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
    }*/
    
    function importData() {
        $excel = new PhpExcelReader;
        if(isset($_POST["Import"]))
        {
            echo $filename=$_FILES["file"]["tmp_name"];
            if($_FILES["file"]["size"] > 0)
            {
                $excel->read($filename);
                //$excel->read('test.xls');
              //  $nr_sheets = count($excel->sheets);       // gets the number of sheets
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

    
$equIndex = new equipmentUnitController();
$equIndex->index();
$equIndex->importData();
header('Location: ../../View/home/index.php?data=home&action=listEquipmentUnit&left=home_left');

