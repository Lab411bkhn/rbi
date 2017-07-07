<?php
    //require_once '../../Model/componentModel.php.php';
    require_once '../../Model/home/componentModel.php';
    $cpn = new componentModel();
    $cpnName = $cpn->getAllComponent();
    $cpnName_1 = $cpn->getAllComponent_name();

?>
<ul>
    <?php
        foreach ($cpnName_1 as $value) {
            $cpnnew = $value['tbl_component_componentName'];
            echo "<li><a href='index.php?data=home&action=risksummary&param=$cpnnew&left=component_left'>".$cpnnew."</a></li>";
        }
    ?>
</ul>

