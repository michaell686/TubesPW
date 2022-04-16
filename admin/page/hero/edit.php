<?php
    include('koneksi.php');
    include('../../functions/HeroFunction.php');
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
                $msg = updateHero($_GET['id'], $_POST['name'], $_POST['attack'], $_POST['health'], $_POST['description']);
            }
            $hero = getHeroById($_GET['id']);
        } else {
            exit('No ID specified!');
        }
    ?>
    <h1>Edit Hero</h1>
    <div>
        <form action="edit.php?id=<?=$hero['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <input type="text" value="<?= $hero['id']; ?>" id="id" id="id"><br>
            <label for="name">Name</label><br>
            <input type="text" value="<?= $hero['name']; ?>" name="name" id="name"><br>
            <label for="attack">Attack</label><br>
            <input type="text" value="<?= $hero['attack']; ?>" name="attack" id="attack"><br>
            <label for="health">Health</label><br>
            <input type="text" value="<?= $hero['health']; ?>" name="health" id="health"><br>
            <label for="description">Description</label><br>
            <input type="text" value="<?= $hero['description']; ?>" name="description" id="description"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to Hero</a>
</body>
</html>