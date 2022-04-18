<?php
    include('../../../koneksi.php');

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $type = isset($_POST['type']) ? $_POST['type'] : '';
        $chances = isset($_POST['chances']) ? $_POST['chances'] : '';
        
        $query = "INSERT INTO type_chances (id, type, chances) VALUES ('$id', '$type', '$chances')";
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
            <input type="text" value="<?= $type_chances['id']; ?>" id="id" id="id"><br>
            <label for="type">type</label><br>
            <input type="text" value="<?= $type_chances['type']; ?>" name="type" id="type"><br>
            <label for="chances">chances</label><br>
            <input type="text" value="<?= $type_chances['chances']; ?>" name="chances" id="chances"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>