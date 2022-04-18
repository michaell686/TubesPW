<?php

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $point = isset($_POST['point']) ? $_POST['point'] : '';
            $chances = isset($_POST['chances']) ? $_POST['chances'] : '';
            
            $query = "UPDATE prize_point set id='" . $id . "', point='" . $point . "'  chances='" .$chances ."' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {    
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM prize_point WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $prize_point = mysqli_fetch_array($result);

        if (!$prize_point) {
            exit('prize_point doesn\'t exist with that ID!');
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
    <h1>Edit Prize_Point</h1>
    <div>
        <form action="edit.php?id=<?=$prize_point['id']?>" method="post">
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
    <a href="index.php">Back to prize_point</a>
</body>
</html>