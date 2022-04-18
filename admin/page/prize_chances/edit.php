<?php
    include('../../../koneksi.php');
    include('../../functions/Prize_ChancesFunction.php');

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
                $msg = updatePrize_chances($_GET['id'], $_POST['prize_id'], $_POST['type_chances_id']);
            }
            $prize_chances = getPrize_chances($_GET['id']);
        } else {
            exit('No ID specified!');
        }
    ?>
    <h1>Edit Prize_chances</h1>
    <div>
        <form action="edit.php?id=<?=$prize_chances['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $prize_chances['id']; ?>" id="id" id="id"><br>
            <label for="prize_id">prize_id</label><br>
            <input type="text" value="<?= $prize_chances['prize_id']; ?>" name="prize_id" id="prize_id"><br>
            <label for="type_chances_id">type_chances_id</label><br>
            <input type="text" value="<?= $prize_chances['type_chances_id']; ?>" name="type_chances_id" id="type_chances_id"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to prize_chances</a>
    <?php
        }
    ?>
</body>
</html>