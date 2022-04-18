<?php
    include('../../functions/HeroFunction.php');

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
            if (!empty($_POST) || !empty($_FILES)) {
                $path = isset($_FILES['picture']['name']) ? $_FILES['picture']['name'] : '';
                $temp = isset($_FILES['picture']['tmp_name']) ? $_FILES['picture']['tmp_name'] : '';

                $msg = updateHero($_GET['id'], $_POST['name'], $_POST['attack'], $_POST['health'], $_POST['description'], $path, $temp);
            }
            $hero = getHeroById($_GET['id']);
        } else {
            exit('No ID specified!');
        }
    ?>
    <h1>Edit Hero</h1>
    <div>
        <form action="edit.php?id=<?=$hero['id']?>" method="post" enctype="multipart/form-data">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="hidden" value="<?= $hero['id']; ?>" id="id" id="id"><br>
            <label for="name">Name</label><br>
            <input type="text" value="<?= $hero['name']; ?>" name="name" id="name"><br>
            <label for="attack">Attack</label><br>
            <input type="text" value="<?= $hero['attack']; ?>" name="attack" id="attack"><br>
            <label for="health">Health</label><br>
            <input type="text" value="<?= $hero['health']; ?>" name="health" id="health"><br>
            <label for="description">Description</label><br>
            <input type="text" value="<?= $hero['description']; ?>" name="description" id="description"><br>
            <label for="picture">Picture</label><br>
            <input type="file" name="picture" id="picture"/><br><br>

            <?php if($hero['picture']) { ?>
                <img src="<?= $hero['picture']; ?>" width="200px" alt="<?= $hero['name']; ?>"><br><br>
            <?php } ?>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to Hero</a>
    <?php
        }
    ?>
</body>
</html>