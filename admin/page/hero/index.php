<?php
    include('../../../koneksi.php');
    include('../../functions/HeroFunction.php');

    session_start();

    if (!isset($_SESSION['my_session'])) {
        $_SESSION['my_session'] = false;
    }
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
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
        }
        th {
            padding-top: 12px;
            padding-bottom: 12px;
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
        if ($_SESSION['my_session']) {
        $heroes = getHero();
    ?>

    <div>
        <h1>Hero</h1>
        <a href="add.php">tambah Hero</a>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Attack</th>
                <th>Health</th>
                <th>Description</th>
                <th>Opsi</th>
            </tr>

            <?php
                foreach($heroes as $hero) {
            ?>
                    <tr>
                    <td><?=$hero['id']?></td>
                    <td><?=$hero['name']?></td>
                    <td><?=$hero['attack']?></td>
                    <td><?=$hero['health']?></td>
                    <td><?=$hero['description']?></td>
                    <td><a href="edit.php?id=<?=$hero['id']?>">Edit</a> <a href='delete.php?id=<?php echo $hero["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>    
</body>

</html>