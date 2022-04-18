<?php
    include('../../../koneksi.php');
    include('../../functions/Category_ItemFunction.php');

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
            $msg = addCategory_item($_POST['category_name']);
        }
    ?>
    <div>       
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="category_name">category_name</label><br>
            <input type="text" name="category_name" id="category_name"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to category item</a>
    <?php
        }
    ?>
</body>
</html>