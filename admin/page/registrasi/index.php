<?php
    include('koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
</head>
<body>
    <?php
        $query = "SELECT * FROM registrasi ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>regitstrasi</h1>
        <table border="1px"> 
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Password</td>
                <td>Opsi</td>
            </tr>

            <?php
                while ($regitstrasi = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$regitstrasi['id']?></td>
                    <td><?=$regitstrasi['nama']?></td>
                    <td><?=$regitstrasi['password']?></td>
                    <td><a href="edit.php?id=<?=$regitstrasi['id']?>">Edit</a> <a href='delete.php?id=<?php echo $regitstrasi["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>