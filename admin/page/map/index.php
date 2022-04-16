<?php
    include('koneksi.php');
    include('../../functions/MapFunction.php');
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
        $map = getMap();
    ?>

    <div>
        <h1>Map</h1>
        <a href="add.php">tambah Hero</a>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Shape</th>
                <th>Coords</th>=
                <th>Opsi</th>
            </tr>

            <?php
                while ($hero = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$hero['id']?></td>
                    <td><?=$hero['nama']?></td>
                    <td><?=$hero['shaape']?></td>
                    <td><?=$hero['coords']?></td>
                    <td><a href="edit.php?id=<?=$hero['id']?>">Edit</a> <a href='delete.php?id=<?php echo $hero["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>