<?php

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        $query = "INSERT INTO registrasi (id, nama, password) VALUES ('$id', '$nama', '$password')";
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
            <input type="text" value="<?= $registrasi['id']; ?>" id="id" id="id"><br>
            <label for="nama">nama</label><br>
            <input type="text" value="<?= $registrasi['nama']; ?>" name="nama" id="nama"><br>
            <label for="password">password</label><br>
            <input type="text" value="<?= $registrasi['password']; ?>" name="password" id="password"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>