<?php
    include('../../../koneksi.php');
    include('../../functions/Prize_ChancesFunction.php');

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
    <title>feedback</title>
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
        $prize_chances = getPrize_chances();
    ?>

    <div>
        <h1>prize_chances</h1>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Prize_id</th>
                <th>type_chances_id</th>
                <th>Opsi</th>
            </tr>

            <?php
                foreach($prize_chances as $prize_chances) {
            ?>
                    <tr>
                    <td><?=$prize_chances['id']?></td>
                    <td><?=$prize_chances['name']?></td>
                    <td><?=$prize_chances['attack']?></td>
                    <td><?=$prize_chances['health']?></td>
                    <td><?=$prize_chances['description']?></td>
                    <td><a href="edit.php?id=<?=$prize_chances['id']?>">Edit</a> <a href='delete.php?id=<?php echo $prize_chances["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>    
</body>

</html>