<?php
    include('../../../koneksi.php');

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $role = isset($_POST['role']) ? $_POST['role'] : '';
        $point = isset($_POST['point']) ? $_POST['point'] : '';
        $life_token = isset($_POST['life_token']) ? $_POST['life_token'] : '';
        
        $query = "INSERT INTO user (nama, password, role, point, life_token) VALUES ('$nama', '$password', '$role', '$point', '$life_token')";
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
            <label for="name">name</label><br>
            <input type="text" value="<?= $user['name']; ?>" name="name" id="name"><br>
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
</body>
</html>