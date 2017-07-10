<?php
require_once '../../Model/home/componentListModel.php';
$cpnList = new componentListModel();
$params = $cpnList->getAllPrameters();
$val = $cpnList->getAllComponent();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css">
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/tableItem.js"></script>
<input type="text" id="searchInput" onkeyup="searchFunction_cpn()" placeholder="Search for names..">
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
            echo "<td><input type='checkbox' name='checkBoxClass' onchange='checkBoxChangeHandler()'></td>";
            echo "</tr>";
        }
    ?>
</table>
<div id="deleteItem" >
    <button onclick="deleteComponent()">Delete Items</button>
</div>
<form enctype="multipart/form-data" method="post" role="form" action="../../Controller/home/componentController.php">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file">
        <p class="help-block">Only .xls File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>
<script>
   /*  function deleteItem(){
         alert("DEMO");
     var x = document.getElementsByClassName("checkBoxClass");
     table = document.getElementById("listTable");
     tr = table.getElementsByTagName("tr");
     var items = [];
     for (var i = 0; i < x.length; i++) {
     if(x[i].checked) {
     //Lay Id bat dau tu dong thu 2, bo qua ten cot
     td = tr[i+1].getElementsByTagName("td")[0];
     if (td) {
     items.push(td.innerHTML);
     }
     }
     }

     var dataq = JSON.stringify(items);

     $.ajax({
     url: "../../Controller/home/equipmentUnitController.php",
     data: 'act=delete&equUnitCode=' + dataq,
     success: function(req){
     alert("Delete Unit Code" + dataq + " successfully! ");
     $(location).attr('href', '../../View/home/index.php?data=home&action=listEquipmentUnit&left=home_left');
     }
     });
     } */
</script>



