<?php
    include('../../../koneksi.php');
    include('../../functions/NewsFunction.php');

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
        if ($_SESSION['my_session']) {
        $news = getNews();
    ?>

    <div>
        <h1>Hero</h1>
        <a href="add.php">tambah News</a>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Description</th>
                <th>newscol</th>
                <th>Opsi</th>
            </tr>

            <?php
                foreach($news as $news) {
            ?>
                    <tr>
                    <td><?=$news['id']?></td>
                    <td><?=$news['judul']?></td>
                    <td><?=$news['gambar']?></td>
                    <td><?=$news['deskripsi']?></td> 
                    <td><?=$news['newscol']?></td> 
                    <td><a href="edit.php?id=<?=$news['id']?>">Edit</a> 
                    <a href='delete.php?id=<?php echo $news["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            }    
            ?>
        </table>
    </div>    
</body>

</html>