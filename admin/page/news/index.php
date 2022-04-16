<?php
    include('koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero</title>
    <style>
        td {
            padding: 15px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #6495ED;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center; 
        }
        .tabel {
            margin-left:auto;
            margin-right:auto;
            width : 100%;
        }
    </style>
</head>
<body>
    <?php
        $query = "SELECT * FROM news ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>Hero</h1>
        <a href="add.php">tambah Hero</a>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Description</th>
                <th>newscol</th>
                <th>Opsi</th>
            </tr>

            <?php
                while ($hero = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$hero['id']?></td>
                    <td><?=$hero['judul']?></td>
                    <td><?=$hero['gambar']?></td>
                    <td><?=$hero['deskripsi']?></td>
                    <td><?=$hero['newscol']?></td>
                    <td><a href="edit.php?id=<?=$hero['id']?>">Edit</a> <a href='delete.php?id=<?php echo $hero["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>