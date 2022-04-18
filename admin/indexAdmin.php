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
    <link rel="stylesheet" href="../pages/css/homePage.css">
    <link rel="stylesheet" href="../pages/css/navbarFooter.css">
    <link rel="stylesheet" href="../pages/css/emblemPage.css">
	<script src="../pages/js/homePage.js"></script>
</head>
<body>
    <?php
    if ($_SESSION['my_session']) {
    ?>
       
   
	<!--===============================
	==========NEWWWWWWWWW==============
	================================-->
	
	<div>
        <nav>
            <ul>
                <li><a href="../pages/homePage.php"><img src="../pages/Asset/Image/MLBB (Mobile Legends Bang Bang) New 2020 Logo (PNG-240p) - Vector69Com.png"
                        id="img-navigasi" width="80px" margin-top="10px"></a></li>
                <li><a href="#">ITEMS</a>
                    <ul>
                        <li><a href="page/category_item/index.php">CATEGORY</a></li>
                        <li><a href="page/item/index.php">ITEM</a></li>
					</ul>
                </li>
				<li><a href="page/emblem/index.php">EMBLEM</a></li>
				<li><a href="page/feedback/index.php">FEEDBACK</a></li>
				<li><a href="page/hero/index.php">HERO</a></li>
				<li><a href="page/home/index.php">HOME</a></li>
				<li><a href="page/map/index.php">MAP</a></li>
				<li><a href="page/news/index.php">NEWS</a></li>
				<li><a href="page/registrasi/index.php">REGISTRASI</a></li>
				<li><a href="page/user/index.php">USER</a></li>
                <?php  echo "<img src='../pages/Asset/new/logo.png' class='logo' alt='logo' width='25px'>";
                        echo $_SESSION['session_username'];
                        echo "<li><a href='?menu=logout'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>"; ?>
            </ul>

        </nav>
    </div>

    <div id="cover" style="display: none;">
        <video autoplay muted loop id="myVideo">
            <source src="../pages/Asset/videoplayback (1) (online-video-cutter.com) (2).mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <h1>MOBILE LEGEND</h1>
    </div>

    <div>
        <footer>
            <section>
                <a href="https://play.google.com/store/apps/details?id=com.mobile.legends">DOWNLOAD MOBILE LEGEND</a>
            </section>
            <section>
                <a href="https://play.google.com/store/apps/details?id=com.mobile.legends" id="footer-logoWrap"><img
                        src="Asset/Image/MLBB (Mobile Legends Bang Bang) New 2020 Logo (PNG-240p) - Vector69Com.png"
                        id="footer-logo" alt=""></a>
            </section>
            <section>
                <ul>
                    <li class="icon facebook"><a href="https://www.facebook.com/mobilelegendsgame/"></a></li>
                    <li class="icon youtube"><a href="https://www.youtube.com/c/MobileLegends5v5MOBA"></a></li>
                    <li class="icon twitter"><a href="https://twitter.com/mobilelegendsid"></a></li>
                </ul>
            </section>
            <section>
                <p id="copyRight">&copy; 2021 Moonton Games, Inc, Moonton, MOBILE LEGEND, and any associated logos are
                    trademarks, service marks.</p>
            </section>
            <section>
                <a href="Support.html" id="footer-support">Support</a>
            </section>
            <section>
                <img src="Asset/Image/clipart2731523.png" id="footer-logo2" alt="">
            </section>
        </footer>
    </div>
	
	
    <?php
    } else {
        include_once '../pages/login.php';
    }
    ?>
</body>
</html>