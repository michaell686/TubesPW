<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
            $prize_id = isset($_POST['prize_id']) ? $_POST['prize_id'] : '';
            $type = isset($_POST['type']) ? $_POST['type'] : '';
            
            $query = "UPDATE prize_rewards set id='" . $id . "', user_id='" . $user_id . "', prize_id='" . $prize_id . "', type='" . $type . "' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM prize_rewards WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $prize_rewards = mysqli_fetch_array($result);

        if (!$prize_rewards) {
            exit('prize_rewards doesn\'t exist with that ID!');
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
    <h1>Edit Prize_rewards</h1>
    <div>
        <form action="edit.php?id=<?=$prize_rewards['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $prize_rewards['id']; ?>" id="id" id="id"><br>
            <label for="user_id">user_id</label><br>
            <input type="text" value="<?= $prize_rewards['user_id']; ?>" name="user_id" id="user_id"><br>
            <label for="prize_id">prize_id</label><br>
            <input type="text" value="<?= $prize_rewards['prize_id']; ?>" name="prize_id" id="prize_id"><br>
            <label for="type">type</label><br>
            <input type="text" value="<?= $prize_rewards['type']; ?>" name="type" id="type"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to prize_rewards</a>
</body>
</html>