<?php
    include('koneksi.php');

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $category_item = isset($_POST['category_item']) ? $_POST['category_item'] : '';
        
        $query = "INSERT INTO category_item (name) VALUES ('$name')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            $msg = 'Inserted Successfully!';
        } else {
            $msg = 'Failed to insert data!';
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="add.php" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="name">name</label><br>
            <input type="text" value="<?= $category_item['name']; ?>" name="name" id="name"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>