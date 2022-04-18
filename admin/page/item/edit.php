<?php
    include('../../../koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $category_item_id = isset($_POST['category_item_id']) ? $_POST['category_item_id'] : '';
            
            $query = "UPDATE item set id='" . $id . "', name='" . $name . "', description='" . $description . "', price='" . $price . "' ,category_item_id='" . $category_item_id .  "' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM item WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $hero = mysqli_fetch_array($result);

        if (!$item) {
            exit('item doesn\'t exist with that ID!');
        }
    } else {
        exit('No ID specified!');
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
    <h1>Edit Hero</h1>
    <div>
        <form action="edit.php?id=<?=$item['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $item['id']; ?>" id="id" id="id"><br>
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
    <a href="index.php">Back to item</a>
</body>
</html>