<?php
    include('koneksi.php');

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
        $prize_id = isset($_POST['prize_id']) ? $_POST['prize_id'] : '';
        $type = isset($_POST['type']) ? $_POST['type'] : '';   
        
        $query = "INSERT INTO prize_rewads (id, user_id, prize_id, type) VALUES ('$id', '$user_id', '$prize_id, $type')";
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
            <input type="text" value="<?= $prize_rewads['id']; ?>" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" value="<?= $prize_nama['nama']; ?>" name="nama" id="nama"><br>
            <label for="shape">shape</label><br>
            <input type="text" value="<?= $prize_rewads['shape']; ?>" name="shape" id="shape"><br>
            <label for="coords">coords</label><br>
            <input type="text" value="<?= $prize_rewads['coords']; ?>" name="coords" id="coords"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>