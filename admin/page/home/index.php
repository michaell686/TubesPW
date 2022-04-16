<?php
    include('koneksi.php');
    include('../../functions/HomeFunction.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        $home = getHome();
    ?>

    <div>
        <h1>Home</h1>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Video Url</th>
                <th>Opsi</th>
            </tr>

            <?php
                foreach($home as $home) {
            ?>
                    <tr>
                    <td><?=$home['id']?></td>
                    <td><?=$home['nama']?></td>
                    <td><?=$home['video_url']?></td>
                    <td><a href="edit.php?id=<?=$home['id']?>">Edit</a> 
                    <a href='delete.php?id=<?php echo $home["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>