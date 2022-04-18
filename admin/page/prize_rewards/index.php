<?php
    include('../../../koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prize_rewards</title>
</head>
<body>
    <?php
        $query = "SELECT * FROM prize_rewards ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>prize_rewards</h1>
        <table border="1px"> 
            <tr>
                <td>ID</td>
                <td>User_id</td>
                <td>Prize_id</td>
                <td>Type</td>
                <td>Opsi</td>
            </tr>

            <?php
                while ($prize_rewards = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$prize_rewards['id']?></td>
                    <td><?=$prize_rewards['user_id']?></td>
                    <td><?=$prize_rewards['prize_id']?></td>
                    <td><?=$prize_rewards['type']?></td>
                    <td><a href="edit.php?id=<?=$prize_rewards['id']?>">Edit</a> <a href='delete.php?id=<?php echo $prize_rewards["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>