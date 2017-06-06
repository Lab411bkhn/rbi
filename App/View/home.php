<html>
    <header>
        <h1>RBI LAB 411</h1>
    </header>
    <body>
    <?php   
        require_once '../Model/user.php';
        $user = new user();
        echo count($user->getUser('haiduong')); 
    ?>
    </body>
</html>