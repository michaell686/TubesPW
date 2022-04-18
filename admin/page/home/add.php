<?php
    include('../../../koneksi.php');
    include('../../functions/HomeFunction.php');

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
            $msg = addHome($_POST['nama'], $_POST['video_url']);
        }
    ?>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="hidden" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" name="nama" id="nama"><br>
            <label for="video_url">video_url</label><br>
            <input type="text" name="video_url" id="video_url"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to home</a>
    <?php
        }
    ?>
</body>
</html>