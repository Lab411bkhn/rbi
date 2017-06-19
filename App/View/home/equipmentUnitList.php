<?php
require_once '../../Model/home/equipmentUnitListModel.php';
$equList = new equipmentUnitListModel();
$params = $equList->getAllPrameters();
$val = $equList->getAllEquipmentUnit();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css">
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/tableItem.js"></script>
<input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for names..">
<button onclick="deleteItem()">DEMO</button>
<table border="1" class="listTable" id="listTable">
    <tr>
        <?php
        foreach ($params as $value) {
            echo "<th><strong>$value</strong></th>";
        }
        ?>
    </tr>
    <?php
        foreach ($val as $key => $value) {
            echo "<tr>";
            foreach ($value as $key => $va) {
                echo "<td>$va</td>";
            }
            echo "<td><input type='checkbox' name='checkBox' onchange='checkBoxChangeHandler()'></td>";
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
        <input type="file" name="file" id="file" size="150px">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>

