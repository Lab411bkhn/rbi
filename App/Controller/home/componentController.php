<?php
require('../../Model/libraries/excel_reader.php');
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
            $filename = $_FILES["file"]["tmp_name"];
            if ($_FILES["file"]["size"] > 0) {
                $excel->read($filename);
                for ($row = 2; $row < $this->MAXSIZE; $row++) {
                    if (($excel->sheets[1]['cells'][$row][6]) === 'Sub Component') {
                        while (++$row) {
                            try {
                                //echo "While" .$row;
                                $cpnName = $excel->sheets[1]['cells'][$row][6];
                                $cpnDescription = $excel->sheets[1]['cells'][$row][7];
                                $cpnMOC = $excel->sheets[1]['cells'][$row][8];
                                $cpnLinearMOC = $excel->sheets[1]['cells'][$row][9];
                                $cpnHeightLength = $excel->sheets[1]['cells'][$row][10];
                                $cpnDiameter = $excel->sheets[1]['cells'][$row][11];
                                $cpnNominalThickness = $excel->sheets[1]['cells'][$row][12];
                                $cpnCA = $excel->sheets[1]['cells'][$row][13];
                                $cpnDesignPressure = $excel->sheets[1]['cells'][$row][14];
                                $cpnDesignTemp = $excel->sheets[1]['cells'][$row][15];

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
                                else
                                    return;
                            } catch (Exception $ex) {
                                return;
                            }
                        }
                        return;
                    }
                }
            } else {
                echo "Invalid File:Please Upload CSV File";
            }
        }
    }

}


$cpnIndex = new componentController();
$cpnIndex->index();
$cpnIndex->ImportData();
header('Location: ../../View/home/index.php?data=home&action=listComponent&left=home_left');
