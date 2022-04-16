<?php
    include('koneksi.php');

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $prize_id = isset($_POST['prize_id']) ? $_POST['prize_id'] : '';
        $type_chances_id = isset($_POST['type_chances_id']) ? $_POST['type_chances_id'] : '';
        
        $query = "INSERT INTO prize_chances (id, prize_id, type_chances_id) VALUES ('$id', '$prize_id', '$type_chances_id')";
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
            <input type="text" value="<?= $prize_chances['id']; ?>" id="id" id="id"><br>
            <label for="prize_id">prize_id</label><br>
            <input type="text" value="<?= $prize_chances['prize_id']; ?>" name="prize_id" id="prize_id"><br>
            <label for="type_chances_id">type_chances_id</label><br>
            <input type="text" value="<?= $prize_chances['type_chances_id']; ?>" name="type_chances_id" id="type_chances_id"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>