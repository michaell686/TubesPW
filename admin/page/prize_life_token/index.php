<?php
    include('../../../koneksi.php');
    include('../../functions/Prize_life_tokenFunction.php');

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
    <title>price life token</title>
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
        $prize_life_token = getPrize_life_token();
    ?>


    <div>
        <h1>prize_life_token</h1>
        <a href="add.php">tambah Prize life token</a>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Token</th>
                <th>Chances</th>
                <th>Opsi</th>
            </tr>

            <?php
                foreach($prize_life_token as $prize_life_token) {
            ?>
                    <tr>
                    <td><?=$prize_life_token['id']?></td>
                    <td><?=$prize_life_token['token']?></td>
                    <td><?=$prize_life_token['chances']?></td>
                    <td><a href="edit.php?id=<?=$prize_life_token['id']?>">Edit</a> <a href='delete.php?id=<?php echo $prize_life_token["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>    
</body>

</html>