<link rel="stylesheet" href="../Public/css/style.css">
<?php
if (isset($_POST["op"] ) && $_POST["op"] == "login")
{
    // B1: L?y thông tin
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    // B2: Ki?m tra d? li?u
    if ($password == 'admin' && $username == 'admin'){
        $URL="../App/View/home/index.php";
        header ("Location: $URL");
    }
    else{
        echo "";
    }
}

?>

<form  method="POST">

    <div class="relative"><img width="105%" height="100%" src="http://nangluongvietnam.vn/stores/news_dataimages/Tongbientap/042017/25/09/Dinhvu_1.jpg" /></div>
    <div class="login-page">
        <div class="form">
            <h1>Welcom to Login</h1>
            <form class="register-form">
                <input type="text" placeholder="Username" name="username"/>
                <input type="password" placeholder="Password" name="password"/>
                <input class="button" type="submit" name="op" value="login"/>
            </form>
        </div>
    </div>
</form>
