<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero</title>
</head>
<body>
    <?php
        $query = "SELECT * FROM user ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>user</h1>
        <a href="add.php">tambah user</a>
        <table border="1px"> 
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Password</td>
                <td>Role</td>
                <td>Point</td>
                <td>Life_token</td>
                <td>Opsi</td>
            </tr>

            <?php
                while ($user = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$user['id']?></td>
                    <td><?=$user['nama']?></td>
                    <td><?=$user['password']?></td>
                    <td><?=$user['role']?></td>
                    <td><?=$user['point']?></td>
                    <td><?=$user['life_token']?></td>
                    <td><a href="edit.php?id=<?=$user['id']?>">Edit</a> <a href='delete.php?id=<?php echo $user["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>