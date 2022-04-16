<?php
    include('koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category_item</title>
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
        $query = "SELECT * FROM category_item ";
        $result = mysqli_query($koneksi, $query);
   
        if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    ?>

    <div>
        <h1>category_item</h1>
        <a href="add.php">tambah category_item</a>
        <table border="1px" class="tabel"> 
            <tr>
                <th>ID</th>
                <th>Category_name</th>
                <th>Opsi</th>
            </tr>

            <?php
                while ($category_item = mysqli_fetch_array($result)) {  
            ?>
                    <tr>
                    <td><?=$category_item['id']?></td>
                    <td><?=$category_item['category_name']?></td>
                    <td><a href="edit.php?id=<?=$category_item['id']?>">Edit</a> <a href='delete.php?id=<?php echo $category_item["id"]; ?>'>Delete</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>    
</body>

</html>