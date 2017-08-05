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
    <button onclick="deleteEqipmentTem()">Delete Items</button>
</div>
<div id="deleteItem" >
    <button onclick="deleteAllEqipmentTem()">Delete All</button>
</div>
<form enctype="multipart/form-data" method="post" role="form" action="../../Controller/home/equipmentTempController.php">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file">
        <p class="help-block">Only .xls File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>
<form action="../../Controller/home/uploadInput.php" method="POST" enctype="multipart/form-data">
    <div class="row" >
        <span>Equipment template:</span>
        <input type="file" name="fileupload_1"/><input type="submit" value="submit" name="submit3"/>

    </div>
</form>
<form method="post"action="../../Controller/home/email.php">
    <div>
        <input type="submit" value="Send mail">
    </div>

</form>


