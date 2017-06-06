<link rel="stylesheet" href="../../../../Public/css/home.css">
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h1>Demo Weatherford</h1>
    <h2>Lab 411</h2>  
    <body>
        <div class="wrapper">
            <?php
            require '../main_menu.php';
            //require './bootstrap.php';
            ?>
            <div>
                <table width="100%">
                    <td width="18%" >
                        <div class="left_menu">
                        <?php
                        require '../../Controller/leftmenuController.php';
                        $left = new leftmenuController();
                        $left->init();
                        ?>
                        </div>
                    </td>
                    <td width="82%">  
                        <div class="main_page">
                            <?php
                            require '../bootstrap.php';
                            $bootstrap = new bootstrap();
                            $bootstrap->init();
                            ?>                            
                        </div>
                    </td>
                </table>
            </div>
        </div>
    </body>
</html>
