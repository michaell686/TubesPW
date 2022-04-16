<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $category_name = isset($_POST['category_name']) ? $_POST['category_name'] : '';
           
            
            $query = "UPDATE category_item set id='" . $id . "', category_name='" . $category_name . "' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM category_item WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $category_item = mysqli_fetch_array($result);

        if (!$category_item) {
            exit('category_item doesn\'t exist with that ID!');
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
        <form action="edit.php?id=<?=$category_item['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $category_item['id']; ?>" id="id" id="id"><br>
            <label for="name">name</label><br>
            <input type="text" value="<?= $category_item['name']; ?>" name="name" id="name"><br>
            <label for="attack">attack</label><br>
            <input type="text" value="<?= $category_item['attack']; ?>" name="attack" id="attack"><br>
            <label for="health">health</label><br>
            <input type="text" value="<?= $category_item['health']; ?>" name="health" id="health"><br>
            <label for="description">description</label><br>
            <input type="text" value="<?= $category_item['description']; ?>" name="description" id="description"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to category_item</a>
</body>
</html>