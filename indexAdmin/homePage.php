<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legend</title>
    <link rel="stylesheet" href="css/homePage.css">
    <link rel="stylesheet" href="css/navbarFooter.css">
    <link rel="stylesheet" href="css/emblemPage.css">
    <script src="js/homePage.js"></script>
</head>


<body onload="myFunction()">
    <div id="loadingBox">
        <div id="loadingWidth">
            <div id="loading"></div>
        </div>
    </div
	<!--session-->
	<?php
		session_start();
	?>
    <div>
        <nav>
            <ul>
                <li><img src="Asset/Image/MLBB (Mobile Legends Bang Bang) New 2020 Logo (PNG-240p) - Vector69Com.png"
                        id="img-navigasi" width="80px" margin-top="10px"></li>
                <li><a href="homePage.php">HOME</a>
                <li><a href="#">GAME INFO</a>
                    <ul>
                        <li><a href="item.html">ITEMS</a></li>
                        <li><a href="imageMaps.php">MAPS</a></li>
                        <li><a href="Hero.html">HERO</a></li>
                        <li><a href="emblemPage.html">EMBLEM</a></li>
                    </ul>
                </li>
                <li><a href="#">OUR SOCIAL</a>
                    <ul>
                        <li><a href="https://www.instagram.com/realmobilelegendsid/">INSTAGRAM</a></li>
                        <li><a href="https://www.facebook.com/mobilelegendsgame/">FACEBOOK</a></li>
                        <li><a href="https://www.youtube.com/c/MobileLegends5v5MOBA">YOUTUBE</a></li>
                    </ul>
                </li>
				
                <li><a href="news.html">NEWS</a></li>
				
				<!--NEWS REGISTER-->
				<li><a href="Login_Form.php" id="login">LOGIN</a></li>
				<li><a href="Register_Form.php">REGISTER</a></li>
				
				<?php
					if(!empty($_SESSION)){
						if($_SESSION['my_session'] == true){
							echo "<img src='Asset/new/logo.png' class='logo' alt='logo' width='35px'>";
							echo "<li><a href='?menu=logout'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>";

							//newwww
							if (!isset($_SESSION['my_session'])) {
								$_SESSION['my_session'] = false;
							}

							if($_GET) {
								$menu = $_GET['menu'];
								if($menu == 'logout') {
									session_unset();
									session_destroy();
									header("location:../pages/homePage.php");
								}
							}						
						}
					}
					
				?>
				
            </ul>

        </nav>
    </div>

    <div id="cover" style="display: none;">
        <video autoplay muted loop id="myVideo">
            <source src="Asset/video/videoplayback (1) (online-video-cutter.com) (2).mp4" type="video/mp4">
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