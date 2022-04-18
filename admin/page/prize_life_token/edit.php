<?php
    include('../../functions/Prize_life_tokenFunction.php');

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
                $msg = updatePrize_life_token($_GET['id'], $_POST['token'], $_POST['chances']);
            }
            $prize_life_token = getPrize_life_tokenByID($_GET['id']);
        } else {
            exit('No ID specified!');
        }
    ?>
    <h1>Edit Prize_life_token</h1>
    <div>
        <form action="edit.php?id=<?=$prize_life_token['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="hidden" value="<?= $prize_life_token['id']; ?>" id="id" id="id"><br>
            <label for="token">token</label><br>
            <input type="text" value="<?= $prize_life_token['token']; ?>" name="token" id="token"><br>
            <label for="chances">chances</label><br>
            <input type="text" value="<?= $prize_life_token['chances']; ?>" name="chances" id="chances"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to prize_life_token</a>
    <?php
        }
    ?>
</body>
</html>