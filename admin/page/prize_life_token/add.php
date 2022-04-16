<?php
    include('koneksi.php');

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $token = isset($_POST['token']) ? $_POST['token'] : '';
        $chances = isset($_POST['chances']) ? $_POST['chances'] : '';
        
        $query = "INSERT INTO prize_life_token (id, token, chances) VALUES ('$id', '$token', '$chances')";
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
            <input type="text" value="<?= $prize_life_token['id']; ?>" id="id" id="id"><br>
            <label for="prize_id">prize_id</label><br>
            <input type="text" value="<?= $prize_life_token['prize_id']; ?>" name="prize_id" id="prize_id"><br>
            <label for="chances">chances</label><br>
            <input type="text" value="<?= $prize_life_token['chances']; ?>" name="chances" id="type_chances_id"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>