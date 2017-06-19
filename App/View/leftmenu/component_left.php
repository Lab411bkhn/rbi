<?php
    //require_once '../../Model/componentModel.php.php';
    require_once '../../Model/componentModel.php';
    $cpn = new componentModel();
    $cpnName = $cpn->getAllComponent();
?>
<ul>
    <?php
        foreach ($cpnName as $value) {
            echo "<li><a href='index.php?data=home&action=detailComponent&left=component_left'>".$value[0]."</a></li>";
        }
    ?>
</ul>

