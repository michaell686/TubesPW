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
        if (!empty($_POST)) {
            $msg = addNews($_POST['judul'], $_POST['gambar'], $_POST['deskripsi'], $_POST['newscol']);
        }
    ?>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="judul">Judul</label><br>
            <input type="text"  name="judul" id="judul"><br>
            <label for="gambar">Gambar</label><br>
            <input type="text"  name="gambar" id="gambar"><br>
            <label for="deskripsi">Deskripsi</label><br>
            <input type="text"  name="deskripsi" id="deskripsi"><br>
            <label for="newscol">Newscol</label><br>
            <input type="text"  name="newscol" id="newscol"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to news</a>
    <?php
        }
    ?>
</body>
</html>