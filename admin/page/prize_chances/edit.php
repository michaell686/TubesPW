<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $prize_id = isset($_POST['prize_id']) ? $_POST['prize_id'] : '';
            $type_chances_id = isset($_POST['type_chances_id']) ? $_POST['type_chances_id'] : '';
            
            $query = "UPDATE prize_chances set id='" . $id . "', prize_id='" . $prize_id . "'  type_chances_id='" .$type_chances_id ."' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM prize_chances WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $prize_chances = mysqli_fetch_array($result);

        if (!$prize_chances) {
            exit('prize_chances doesn\'t exist with that ID!');
        }
    } else {
        exit('No ID specified!');
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
    <h1>Edit Prize_chances</h1>
    <div>
        <form action="edit.php?id=<?=$prize_chances['id']?>" method="post">
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
    <a href="index.php">Back to prize_chances</a>
</body>
</html>