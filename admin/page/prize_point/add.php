<?php

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $point = isset($_POST['point']) ? $_POST['point'] : '';
        $chances = isset($_POST['chances']) ? $_POST['chances'] : '';
        
        $query = "INSERT INTO prize_point (id, point, chances) VALUES ('$id', '$point', '$chances')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            $msg = 'Inserted Successfully!';
        } else {
            $msg = 'Failed to insert data!';
        }
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
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $prize_point['id']; ?>" id="id" id="id"><br>
            <label for="point">point</label><br>
            <input type="text" value="<?= $prize_point['point']; ?>" name="point" id="point"><br>
            <label for="chances">chances</label><br>
            <input type="text" value="<?= $prize_point['chances']; ?>" name="chances" id="chances"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>