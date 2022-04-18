<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
</head>
<body>
    <?php
        $query = "SELECT * FROM type_chances ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>type_chances</h1>
        <table border="1px"> 
            <tr>
                <td>ID</td>
                <td>Type</td>
                <td>Chances</td>
                <td>Opsi</td>
            </tr>

            <?php
                while ($type_chances = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$type_chances['id']?></td>
                    <td><?=$type_chances['type']?></td>
                    <td><?=$type_chances['chances']?></td>
                    <td><a href="edit.php?id=<?=$type_chances['id']?>">Edit</a> <a href='delete.php?id=<?php echo $type_chances["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>