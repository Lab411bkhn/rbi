<link rel="stylesheet" href="../../../../Public/css/home.css">
<html>
    <head>
        <meta charset="UTF-8">
        <title>RBI Lab 411</title>
    </head>  
    <body>
        <div class="wrapper">
            <div class="header">
                
            </div>
            <?php
            require '../main_menu.php';
            //require './bootstrap.php';
            ?>
            <div>
                <table>
                    <tr>
                    <td width="250px" >
                        <div class="left_menu">
                        <?php
                        require '../../Controller/leftmenuController.php';
                        $left = new leftmenuController();
                        $left->init();
                        ?>
                        </div>
                    </td>
                    <td width="750px">  
                        <div class="main_page">
                            <?php
                            require '../bootstrap.php';
                            $bootstrap = new bootstrap();
                            $bootstrap->init();
                            ?>                            
                        </div>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </body>
</html>
