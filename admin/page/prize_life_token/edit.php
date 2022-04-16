<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $token = isset($_POST['token']) ? $_POST['token'] : '';
            $chances = isset($_POST['chances']) ? $_POST['chances'] : '';
            
            $query = "UPDATE prize_chances set id='" . $id . "', token='" . $token . "'  chances='" .$chances ."' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM prize_life_token WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $prize_life_token = mysqli_fetch_array($result);

        if (!$prize_life_token) {
            exit('prize_life_token doesn\'t exist with that ID!');
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
    <h1>Edit Prize_life_token</h1>
    <div>
        <form action="edit.php?id=<?=$prize_life_token['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $prize_life_token['id']; ?>" id="id" id="id"><br>
            <label for="token">token</label><br>
            <input type="text" value="<?= $prize_life_token['token']; ?>" name="token" id="token"><br>
            <label for="chances">chances</label><br>
            <input type="text" value="<?= $prize_life_token['chances']; ?>" name="chances" id="type_chances_id"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to prize_life_token</a>
</body>
</html>