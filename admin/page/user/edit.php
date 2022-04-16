<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $role = isset($_POST['role']) ? $_POST['role'] : '';
            $point = isset($_POST['point']) ? $_POST['point'] : '';
            $life_token = isset($_POST['life_token']) ? $_POST['life_token'] : '';
            
            $query = "UPDATE user set id='" . $id . "', nama='" . $nama . "', password='" . $password . "', role='" . $role . "' ,point='" . $point .  "' ,life_token='" . $life_token .  "' WHERE id='"  . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM user WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $user = mysqli_fetch_array($result);

        if (!$user) {
            exit('user doesn\'t exist with that ID!');
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
    <h1>Edit User</h1>
    <div>
        <form action="edit.php?id=<?=$user['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $user['id']; ?>" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" value="<?= $user['nama']; ?>" nama="nama" id="nama"><br>
            <label for="password">password</label><br>
            <input type="text" value="<?= $user['password']; ?>" name="password" id="password"><br>
            <label for="role">role</label><br>
            <input type="text" value="<?= $user['role']; ?>" name="role" id="role"><br>
            <label for="point">point</label><br>
            <input type="text" value="<?= $user['point']; ?>" name="point" id="point"><br>
            <label for="life_token">life_token</label><br>
            <input type="text" value="<?= $user['life_token']; ?>" name="life_token" id="life_token"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to user</a>
</body>
</html>