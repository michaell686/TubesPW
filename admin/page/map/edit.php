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
        if (isset($_GET['id'])) {
            if (!empty($_POST)) {
                $msg = updateMap($_GET['id'], $_POST['nama'],  $_POST['shape'],  $_POST['coords']);
            }
            $map = getMapById($_GET['id']);
        } else {
            exit('No ID specified!');
        }   
    ?>
    <h1>Edit Map</h1>
    <div>
        <form action="edit.php?id=<?=$map['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $map['id']; ?>" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" value="<?= $map['nama']; ?>" name="nama" id="nama"><br>
            <label for="shape">shape</label><br>
            <input type="text" value="<?= $map['shape']; ?>" name="shape" id="shape"><br>
            <label for="coords">coords</label><br>
            <input type="text" value="<?= $map['coords']; ?>" name="coords" id="coords"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to Map</a>
    <?php
        }
    ?>
</body>
</html>