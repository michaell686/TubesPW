<?php
    include('koneksi.php');
    include('../../functions/HomeFunction.php');
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
        if (isset($_GET['id'])) {
            if (!empty($_POST)) {
                $msg = updateHome($_GET['id'], $_POST['nama'], $_POST['video_url']);
            }
            $home = getHomeById($_GET['id']);
        } else {
            exit('No ID specified!');
        }
    ?>
    <h1>Edit Home</h1>
    <div>
        <form action="edit.php?id=<?=$home['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="hidden" value="<?= $home['id']; ?>" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" value="<?= $home['nama']; ?>" name="nama" id="nama"><br>
            <label for="video_url">video_url</label><br>
            <input type="text" value="<?= $home['video_url']; ?>" name="video_url" id="video_url"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to home</a>
</body>
</html>