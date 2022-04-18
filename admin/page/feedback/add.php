<?php
    include('../../../koneksi.php');
    include('../../functions/FeedbackFunction.php');
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
            $msg = addFeedback($_POST['id'], $_POST['nama'], $_POST['komentar']);
        }
    ?>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="hidden" value="<?= $feedback['id']; ?>" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" value="<?= $feedback['nama']; ?>" name="nama" id="nama"><br>
            <label for="komentar">komentar</label><br>
            <input type="text" value="<?= $feedback['komentar']; ?>" name="komentar" id="komentar"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>