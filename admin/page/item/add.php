<?php
    include('koneksi.php');

    if (!empty($_POST)) {
        
        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $category_item_id = isset($_POST['category_item_id']) ? $_POST['category_item_id'] : '';
        
        $query = "INSERT INTO item (name, attack, health, description) VALUES ('$name', '$attack', '$health', '$description')";
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
            <input type="text" value="<?= $item['name']; ?>" name="name" id="name"><br>
            <label for="description">description</label><br>
            <input type="text" value="<?= $item['description']; ?>" name="description" id="description"><br>
            <label for="price">price</label><br>
            <input type="text" value="<?= $item['price']; ?>" name="price" id="price"><br>
            <label for="category_item_id">category_item_id</label><br>
            <input type="text" value="<?= $item['category_item_id']; ?>" name="category_item_id" id="category_item_id"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>