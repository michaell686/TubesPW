<?php
    include('../../../koneksi.php');
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
        if (!empty($_POST)) {
            $msg = addHero($_POST['name'], $_POST['attack'], $_POST['health'], $_POST['description']);
        }
    ?>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name"><br>
            <label for="attack">Attack</label><br>
            <input type="text" name="attack" id="attack"><br>
            <label for="health">Health</label><br>
            <input type="text" name="health" id="health"><br>
            <label for="description">Description</label><br>
            <input type="text" name="description" id="description"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to hero</a>
    <?php
        }
    ?>
</body>
</html>