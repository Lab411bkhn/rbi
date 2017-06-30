<?php
require_once '../../Model/home/equipmentTempListModel.php';
$equList = new equipmentTempListModel();
$params = $equList->getAllPrameters();
$value = $equList->getAllEquipmentUnit();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css">
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/tableItem.js"></script>
<input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for names..">
<table border="1" class="listTable" id="listTable">
      
    <?php
        echo "<tr>";
        foreach ($params as $key =>$param) {
            if($key>0){
                echo "<th><strong>$param</strong></th>";
            }
        }
        echo "</tr>";
        foreach ($value as $key1 => $val) {
            echo "<tr>";
            foreach ($val as $key2 => $va) {
                //echo "<th><strong>$params[$key1]</strong></th>";
                if($key2!=="STT"){
                    echo "<td>$va</td>";
                }
            }
            echo "<td><input type='checkbox' class='checkBoxClass' onchange='checkBoxChangeHandler()'></td>";
            echo "</tr>";
        }
    ?>
</table>
<div id="deleteItem" >
    <button onclick="deleteItem()">Delete Items</button>
</div>
<form enctype="multipart/form-data" method="post" role="form" action="../../Controller/home/equipmentUnitController.php">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file">
        <p class="help-block">Only .xls File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>


