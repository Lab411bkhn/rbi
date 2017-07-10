<?php 
class componentController
{
    function __construct()
    {
        require("../../Model/home/componentModel.php");
         $this->newComModel = new componentModel();
         $this->MAXSIZE = 20;


    }

    //put your code here
    function index()
    {
        if (isset($_GET["act"])) {
            if ($_GET["act"] == 'delete') {
                $cpnNameStr = isset($_GET["cpnName"]) ? $_GET["cpnName"] : NULL;
                $cpnName = json_decode($cpnNameStr);
                $this->newComModel->deleteComponent($cpnName);
                //  echo "DUONG DELETE";
            }
        } else {
            $cpnName = isset($_GET['cpnName']) ? $_GET['cpnName'] : "";
            $cpnDescription = isset($_GET['cpnDescription']) ? $_GET['cpnDescription'] : "";
            $cpnMOC = isset($_GET['cpnMOC']) ? $_GET['cpnMOC'] : "";
            $cpnLinearMOC = isset($_GET['cpnLinearMOC']) ? $_GET['cpnLinearMOC'] : "";
            $cpnHeightLength = isset($_GET['cpnHeightLength']) ? $_GET['cpnHeightLength'] : "";
            $cpnDiameter = isset($_GET['cpnDiameter']) ? $_GET['cpnDiameter'] : "";
            $cpnNominalThickness = isset($_GET['cpnNominalThickness']) ? $_GET['cpnNominalThickness'] : "";
            $cpnCA = isset($_GET['cpnCA']) ? $_GET['cpnCA'] : "";
            $cpnDesignPressure = isset($_GET['cpnDesignPressure']) ? $_GET['cpnDesignPressure'] : "";
            $cpnDesignTemp = isset($_GET['cpnDesignTemp']) ? $_GET['cpnDesignTemp'] : "";
            $data = array(
                "componentName" => $cpnName,
                "componentDescription" => $cpnDescription,
                "MOC" => $cpnMOC,
                "LinearMOC" => $cpnLinearMOC,
                "HeightLength" => $cpnHeightLength,
                "Diameter" => $cpnDiameter,
                "NominalThickness" => $cpnNominalThickness,
                "CA" => $cpnCA,
                "DesignPressure" => $cpnDesignPressure,
                "DesignTemp" => $cpnDesignTemp
            );

            if ($cpnName != "") {
                if (!file_exists("../../Model/home/componentModel.php")) {
                    require("../../Controller/404.php");
                    return;
                }
                $cpn = new componentModel();
                //print_r($data);
                $cpn->insertComponent($data);
            }
        }
    }
        function ImportData()
        {
            $excel = new PhpExcelReader();
            if (isset($_POST["Import"])) {
                echo $filename = $_FILES["file"]["tmp_name"];
                if ($_FILES["file"]["size"] > 0) {
                    $excel->read($filename);
                    for ($row = 1; $row < $this->MAXSIZE; $row++) {
                        if (($excel->sheets[0]['cells'][$row][1]) == 'compont Name') {
                            echo "DONG:" . $row;
                            $col = 1;
                            while (++$row) {
                                try {
                                    $cpnName = $excel->sheets[0]['cells'][$row][1];
                                    $cpnDescription = $excel->sheets[0]['cells'][$row][2];
                                    $cpnMOC = $excel->sheets[0]['cells'][$row][3];
                                    $cpnLinearMOC = $excel->sheets[0]['cells'][$row][4];
                                    $cpnHeightLength = $excel->sheets[0]['cells'][$row][5];
                                    $cpnDiameter = $excel->sheets[0]['cells'][$row][6];
                                    $cpnNominalThickness = $excel->sheets[0]['cells'][$row][7];
                                    $cpnCA = $excel->sheets[0]['cells'][$row][8];
                                    $cpnDesignPressure = $excel->sheets[0]['cells'][$row][9];
                                    $cpnDesignTemp = $excel->sheets[0]['cells'][$row][10];
                                    if (is_numeric($cpnName) && ($cpnDescription != "") && ($cpnMOC != "") && ($cpnLinearMOC != "") && ($cpnHeightLength != "") && ($cpnDiameter != "") && ($cpnDesignPressure != "") && ($cpnDesignTemp != ""))
                                        $this->eqUnit->insertComponent($cpnName, $cpnDescription, $cpnMOC, $cpnLinearMOC, $cpnHeightLength, $cpnDiameter, $cpnNominalThickness, $cpnCA, $cpnDesignPressure, $cpnDesignTemp);
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
                } else
                    echo 'Invalid File:Please Upload CSV File';
            }
        }

}



$cpnIndex = new componentController();
$cpnIndex->index();
header('Location: ../../View/home/index.php?data=home&action=listComponent&left=home_left');
