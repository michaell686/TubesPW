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
        if (isset($_GET['id'])) {
            if (!empty($_POST)) {
                $msg = updateCategory_item($_GET['id'], $_POST['category_name']);
            }
            $category_item = getCategory_itemById($_GET['id']);
        } else {
            exit('No ID specified!');
        }
    ?>
    <h1>Edit Emblem</h1>
    <div>
        <form action="edit.php?id=<?=$category_item['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">Id</label><br>
            <input type="text" value="<?= $category_item['id']; ?>" id="id" id="id"><br>
            <label for="category_name">Category Name</label><br>
            <input type="text" value="<?= $category_item['category_name']; ?>" name="category_name" id="category_name"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to Category Item</a>
    <?php
        }
    ?>
</body>
</html>