<?php
require_once '../../Model/database.php';

class risksumary{
    function __construct($arr){
        $this->arr = $arr;
        //require("../../Model/home/componentModel.php");
        $this->ris = new componentModel();
    }

    function index(){
        $params=$this->ris->getAllPrameters();
        $val = $this->ris->getRowComponentName($this->arr['tbl_component_componentName']);
        //print_r($val);
        echo "<table border='1' class='listTable' id='listTable'><tr>";
        foreach ($params as $value) {
            echo "<th>$value</th>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($val as $key => $value) {

            //foreach ($value as $key => $va) {
                echo "<td>$value</td>";
            //}

        }
        echo "</tr>";

        echo "<form action='../../Model/home/risksummaryExportModel.php'>
            <div>

              <p class=''>Only .xls File Export.</p>
              <input type='submit' class='file' name='Export' value='Export' size='100px'>
            </div>
            </form>";


    }
}


