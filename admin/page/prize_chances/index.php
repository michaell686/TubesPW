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
        $query = "SELECT * FROM prize_chances ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>prize_chances</h1>
        <table border="1px"> 
            <tr>
                <td>ID</td>
                <td>Prize_id</td>
                <td>type_chances_id</td>
                <td>Opsi</td>
            </tr>

            <?php
                while ($prize_chances = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$prize_chances['id']?></td>
                    <td><?=$prize_chances['prize_id']?></td>
                    <td><?=$prize_chances['type_chances_id']?></td>
                    <td><a href="edit.php?id=<?=$prize_chances['id']?>">Edit</a> <a href='delete.php?id=<?php echo $prize_chances["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>