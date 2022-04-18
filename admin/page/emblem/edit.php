<?php
    include('../../functions/EmblemFunction.php');

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
                $msg = updateEmblem($_GET['id'], $_POST['nama']);
            }
            $emblem = getEmblemById($_GET['id']);
        } else {
            exit('No ID specified!');
        }   
    ?>
    <h1>Edit Emblem</h1>
    <div>
        <form action="edit.php?id=<?=$emblem['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="hidden" value="<?= $emblem['id']; ?>" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" value="<?= $emblem['nama']; ?>" name="nama" id="nama"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to Emblem</a>
    <?php
        }
    ?>
</body>
</html>