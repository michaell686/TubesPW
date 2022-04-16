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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SESSION['my_session']) {
    ?>
        Hi User <?php echo $_SESSION['session_username']?>
        <li><a href="?menu=logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    <?php
    } else {
        include_once '../pages/login.php';
    }
    ?>
</body>
</html>