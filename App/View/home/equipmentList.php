<?php
require_once '../../Model/home/equipmentListModel.php';
$equList = new equipmentListModel();
$params = $equList->getAllPrameters();
$val = $equList->getAllEquipment();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css">
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/tableItem.js"></script>
<input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for names..">
<table border="1" class="listTable" id="listTable">
    <tr>
        <?php
        foreach ($params as $value) {
            echo "<th>$value</th>";
        }
        ?>
    </tr>
    <?php
        foreach ($val as $key => $value) {
            echo "<tr>";
            foreach ($value as $key => $va) {
                echo "<td>$va</td>";
            }
            echo "<td><input type='checkbox' class='checkBoxEquipment' onchange='checkBoxChangeHandlerEq()'></td>";
            echo "</tr>";
        }
    ?>
</table>
<div id="deleteItem" >
    <button onclick="deleteEquipment()">Delete Items</button>
</div>
<form enctype="multipart/form-data" method="post" role="form" action="../../Controller/home/equipmentController.php">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file">
        <p class="help-block">Only .xls File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>



