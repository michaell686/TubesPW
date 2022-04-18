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
    <title>Admin</title>
    <link rel="stylesheet" href="../pages/css/navbarFooter.css">
</head>
<body>
    <?php
    if ($_SESSION['my_session']) {
    ?>

<div>
        <nav>
            <ul>
                <li><img src="Asset/Image/MLBB (Mobile Legends Bang Bang) New 2020 Logo (PNG-240p) - Vector69Com.png"
                        id="img-navigasi" width="80px" margin-top="10px"></li>
                <li><a href="homePage.html">HOME</a>
                <li><a href="#">ITEMS</a>
                    <ul>
                        <li><a href="page/category_item/index.php">CATEGORY</a></li>
                        <li><a href="page/item/index.php">ITEMS</a></li>
                        
                    </ul>
                </li>
                <li><a href="Specs.html">SPECS</a></li>
                <li><a href="#">OUR SOCIAL</a>
                
                    <ul>
                        <li><a href="https://www.instagram.com/realmobilelegendsid/">INSTAGRAM</a></li>
                        <li><a href="https://www.facebook.com/mobilelegendsgame/">FACEBOOK</a></li>
                        <li><a href="https://www.youtube.com/c/MobileLegends5v5MOBA">YOUTUBE</a></li>
                    </ul>
                </li>
                <li><a href="news.html">NEWS</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="register.php">REGISTER</a></li>
            </ul>

        </nav>
    </div>
        Hi Admin <?php echo $_SESSION['session_username']?>
        <li><a href="?menu=logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    <?php
    } else {
        include_once '../pages/login.php';
    }
    ?>
</body>
</html>