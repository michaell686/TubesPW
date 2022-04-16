<?php
    include('koneksi.php');
    include('../../functions/EmblemFunction.php');
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
        $emblem = getEmblem();
    ?>

    <div>
        <h1>Emblem</h1>
        <a href="add.php">Add Emblem</a>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Opsi</th>
            </tr>

            <?php
                foreach($emblem as $emblem) {
            ?>
                    <tr>
                    <td><?=$emblem['id']?></td>
                    <td><?=$emblem['nama']?></td>
                    <td><a href="edit.php?id=<?=$emblem['id']?>">Edit</a> 
                    <a href='delete.php?id=<?php echo $emblem["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>