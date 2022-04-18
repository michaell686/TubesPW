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
        Hi Admin <?php echo $_SESSION['session_username']?>
        <li><a href="?menu=logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    <?php
    } else {
        include_once '../pages/login.php';
    }
    ?>
	<!--===============================
	==========NEWWWWWWWWW==============
	================================-->
	
	<div>
        <nav>
            <ul>
                <li><img src="Asset/Image/MLBB (Mobile Legends Bang Bang) New 2020 Logo (PNG-240p) - Vector69Com.png"
                        id="img-navigasi" width="80px" margin-top="10px"></li>
                <li><a href="#">HOME</a>
                <li><a href="#">CATEGORY ITEM</a>
                    <ul>
                        <li><a href="page/category_item/add.php">Add</a></li>
                        <li><a href="page/category_item/delete.php">Delete</a></li>
						<li><a href="page/category_item/edit.php">Delete</a></li>                 
						<li><a href="page/category_item/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">ITEM</a>
                    <ul>
                        <li><a href="page/item/add.php">Add</a></li>
                        <li><a href="page/item/delete.php">Delete</a></li>
						<li><a href="page/item/edit.php">Delete</a></li>                 
						<li><a href="page/item/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">EMBLEM</a>
                    <ul>
                        <li><a href="page/emblem/add.php">Add</a></li>
                        <li><a href="page/emblem/delete.php">Delete</a></li>
						<li><a href="page/emblem/edit.php">Delete</a></li>                 
						<li><a href="page/emblem/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">FEEDBACK</a>
                    <ul>
                        <li><a href="page/feedback/add.php">Add</a></li>
                        <li><a href="page/feedback/delete.php">Delete</a></li>
						<li><a href="page/feedback/edit.php">Delete</a></li>                 
						<li><a href="page/feedback/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">HERO</a>
                    <ul>
                        <li><a href="page/hero/add.php">Add</a></li>
                        <li><a href="page/hero/delete.php">Delete</a></li>
						<li><a href="page/hero/edit.php">Delete</a></li>                 
						<li><a href="page/hero/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">HOME</a>
                    <ul>
                        <li><a href="page/home/add.php">Add</a></li>
                        <li><a href="page/home/delete.php">Delete</a></li>
						<li><a href="page/home/edit.php">Delete</a></li>                 
						<li><a href="page/home/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">MAP</a>
                    <ul>
                        <li><a href="page/map/add.php">Add</a></li>
                        <li><a href="page/map/delete.php">Delete</a></li>
						<li><a href="page/map/edit.php">Delete</a></li>                 
						<li><a href="page/map/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">NEWS</a>
                    <ul>
                        <li><a href="page/news/add.php">Add</a></li>
                        <li><a href="page/news/delete.php">Delete</a></li>
						<li><a href="page/news/edit.php">Delete</a></li>                 
						<li><a href="page/news/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">REGISTRASI</a>
                    <ul>
                        <li><a href="page/registrasi/add.php">Add</a></li>
                        <li><a href="page/registrasi/delete.php">Delete </a></li>
						<li><a href="page/registrasi/edit.php">Delete</a></li>                 
						<li><a href="page/registrasi/index.php">Index</a></li>
					</ul>
                </li>
				<li><a href="#">USER</a>
                    <ul>
                        <li><a href="page/user/add.php">Add</a></li>
                        <li><a href="page/user/delete.php">Delete</a></li>
						<li><a href="page/user/edit.php">Delete</a></li>                 
						<li><a href="page/user/index.php">Indexsss</a></li>
					</ul>
                </li>
					
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
	
	
	
</body>
</html>