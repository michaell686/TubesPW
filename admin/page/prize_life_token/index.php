<?php
    include('koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>price life token</title>
</head>
<body>
    <?php
        $query = "SELECT * FROM prize_life_token ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>prize_life_token</h1>
        <table border="1px"> 
            <tr>
                <td>ID</td>
                <td>Token</td>
                <td>Chances</td>
                <td>Opsi</td>
            </tr>

            <?php
                while ($prize_life_token = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$prize_life_token['id']?></td>
                    <td><?=$prize_life_token['token']?></td>
                    <td><?=$prize_life_token['chances']?></td>
                    <td><a href="edit.php?id=<?=$prize_life_token['id']?>">Edit</a> <a href='delete.php?id=<?php echo $prize_life_token["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>