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
        $query = "SELECT * FROM prize_point ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>prize_point</h1>
        <table border="1px"> 
            <tr>
                <td>ID</td>
                <td>Point</td>
                <td>Chances</td>
                <td>Opsi</td>
            </tr>

            <?php
                while ($prize_point = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$prize_point['id']?></td>
                    <td><?=$prize_point['point']?></td>
                    <td><?=$prize_point['chances']?></td>
                    <td><a href="edit.php?id=<?=$prize_point['id']?>">Edit</a> <a href='delete.php?id=<?php echo $prize_point["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>