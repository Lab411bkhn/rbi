<link rel="stylesheet" href="css/style.css">
<?php
session_start();
if(isset($_SESSION['username'])){ 
    header("Location:../../App/View/home/index.php");
}

require_once '../App/Controller/userController.php';
require_once '../App/Model/user.php';
@$op = $_REQUEST['op'];
$user_controller = new userController();
switch ($op) {
    case 'login':
        $userName = 'admin';//$_POST['username'];
        $password = 'admin';//$_POST['password'];
        if($user_controller->login($userName, $password)){
            header("Location:../App/View/home/index.php");
        }
        else{
            //header("Location:../../App/View/home/index.php");
        }
        break;

    default:
        break;
}
?>

<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
      <form class="login-form" action="demologin.php" method="POST">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <input class="button" type="submit" name="op" value="login"/>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>