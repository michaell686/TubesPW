<?php
    include('../../functions/NewsFunction.php');

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
                $msg = updateNews($_GET['id'], $_POST['judul'],  $_POST['gambar'],  $_POST['deskripsi'], $_POST['newscol']);
            }
            $news = getNewsById($_GET['id']);
        } else {
            exit('No ID specified!');
        }   
    ?>
    <h1>Edit News</h1>
    <div>
        <form action="edit.php?id=<?=$news['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $news['id']; ?>" id="id" id="id"><br>
            <label for="judul">Judul</label><br>
            <input type="text" value="<?= $news['judul']; ?>" name="judul" id="judul"><br>
            <label for="gambar">Gambar</label><br>
            <input type="text" value="<?= $news['gambar']; ?>" name="gambar" id="gambar"><br>
            <label for="deskripsi">Deskripsi</label><br>
            <input type="text" value="<?= $news['deskripsi']; ?>" name="deskripsi" id="deskripsi"><br>
            <label for="newscol">Newscol</label><br>
            <input type="text" value="<?= $news['newscol']; ?>" name="newscol" id="newscol"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to news</a>
    <?php
        }
    ?>
</body>
</html>