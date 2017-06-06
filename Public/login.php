<?php
    //require '../App/Model/connectSql.php';
    if(isset($_POST['submit'])){
        echo $_POST['submit'];
    }
?>

<form action="index.php" method="POST">
    Username: <input type="text" name="user"/><br />
    Password: <input type="password" name="password"/><br />
    <input type="submit" value="login" name="submit"/>
</form>