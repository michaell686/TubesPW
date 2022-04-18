<?php
    include('../../functions/MapFunction.php');
    session_start();

    if (!isset($_SESSION['my_session'])) {
        $_SESSION['my_session'] = false;
    }
?>
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
        if (!empty($_POST)) {
            $msg = addMap($_POST['nama'], $_POST['shape'], $_POST['coords']);
        }
    ?>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="nama">nama</label><br>
            <input type="text"  name="nama" id="nama"><br>
            <label for="shape">shape</label><br>
            <input type="text"  name="shape" id="shape"><br>
            <label for="coords">coords</label><br>
            <input type="text"  name="coords" id="coords"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to map</a>
    <?php
        }
    ?>
</body>
</html>