<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h1>Demo Weatherford</h1>
    <h2>Lab 411</h2>
    <ul style="list-style-type: none">
        <li><a href="../Public/index.php?data=home">Home</a></li>
        <li><a href="../Public/index.php?data=setting">Setting</a></li>
        <li><a href="../Public/index.php?data=tools">Tools</a></li>
        <li><a href="../Public/index.php?data=components">Components</a></li>
        <li><a href="../Public/index.php?data=help">Help</a></li>

    </ul>
    <?php
    require '../App/View/menu.php';
    ?>
    <body>
        <?php
            //require './bootstrap.php';
            require './bootstrap.php';
            $bootstrap = new bootstrap();
            $bootstrap->init();
        ?>
    </body>
</html>
