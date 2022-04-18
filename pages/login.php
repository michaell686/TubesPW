<?php
include('../functions/UserFunction.php');

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $md5Password = md5($password);
    $result = login($username, $md5Password);
    if ($result != null) {
        $_SESSION['my_session'] = true;
        $_SESSION['session_user'] = $result['nama'];
        $_SESSION['session_role'] = $result['role'];
        $_SESSION['session_point'] = $result['point'];
        $_SESSION['session_token'] = $result['token'];
        $_SESSION['session_username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['hash_password'] = $md5Password;
        if($result['role'] == 'admin') {
            header("location:../admin/index.php");
        } else {
            header("location:homePage.php");
        }
        
    } else {
        echo '<div class="bg-info">Invalid Username or Password</div>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legend</title>
    <link rel="stylesheet" href="css/login.css.css">
</head>

<body onload="myFunction()">
<?php 
    session_start();

    if (!isset($_SESSION['my_session'])) {
        $_SESSION['my_session'] = false;
    }

    if($_GET) {
        $menu = $_GET['menu'];
        if($menu == 'logout') {
            session_unset();
            session_destroy();
            header("location:../pages/login.php");
        }
    }
?>
    <img src="Asset/Image/3518004.jpg" alt="">
    <div id="login">
        <form method="post">
            <h1>Please Sign In</h1>
            <label for="username">UserID</label>
            <input type="text" id="username" name="username" autofocus required placeholder="User ID">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Password">
            <input type="submit" value="Sign In" name="btnSignIn">
        </form>
    </div>

    
</body>

</html>