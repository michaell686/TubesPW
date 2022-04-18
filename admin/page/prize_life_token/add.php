<?php
    include('../../../koneksi.php');
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
        if (!empty($_POST)) {
            $msg = addPrize_life_token($_POST['prize_id'], $_POST['chances']);
        }
    ?>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="prize_id">prize_id</label><br>
            <input type="text" name="prize_id" id="prize_id"><br>
            <label for="chances">chances</label><br>
            <input type="text" name="chances" id="type_chances_id"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to prize life token </a>
    <?php
        }
    ?>
</body>
</html>