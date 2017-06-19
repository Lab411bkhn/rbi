<?php
require_once '../../Model/home/equipmentListModel.php';
$cpnList = new componentListModel();
$params = $cpnList->getAllPrameters();
$val = $cpnList->getAllEquipment();
?>
<table border="1">
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
            echo "</tr>";
        }
    ?>
</table>



