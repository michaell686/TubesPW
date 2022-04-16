<?php
    include('koneksi.php');
    include('../../functions/EmblemFunction.php');
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
        if (!empty($_POST)) {
            $msg = addEmblem($_POST['id'], $_POST['nama']);
        }
    ?>
    <h1>Add Emblem</h1>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="hidden" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text"  name="nama" id="nama"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to emblem</a>
</body>
</html>