<?php

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            
            $query = "UPDATE registrasi set id='" . $id . "', nama='" . $nama . "'  password='" .$password ."' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {    
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM registrasi WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $registrasi = mysqli_fetch_array($result);

        if (!$registrasi) {
            exit('registrasi doesn\'t exist with that ID!');
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
    <h1>Edit Registrasi</h1>
    <div>
        <form action="edit.php?id=<?=$registrasi['id']?>" method="post">
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
    <a href="index.php">Back to registrasi</a>
</body>
</html>