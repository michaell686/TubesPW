<?php
    include('../../../koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $type = isset($_POST['type']) ? $_POST['type'] : '';
            $chances = isset($_POST['chances']) ? $_POST['chances'] : '';
            
            $query = "UPDATE type_chances set id='" . $id . "', type='" . $type . "'  chances='" .$chances ."' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {    
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM type_chances WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $type_chances = mysqli_fetch_array($result);

        if (!$type_chances) {
            exit('type_chances doesn\'t exist with that ID!');
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
    <h1>Edit Type_Chances</h1>
    <div>
        <form action="edit.php?id=<?=$type_chances['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $type_chances['id']; ?>" id="id" id="id"><br>
            <label for="type">type</label><br>
            <input type="text" value="<?= $type_chances['type']; ?>" name="type" id="type"><br>
            <label for="chances">chances</label><br>
            <input type="text" value="<?= $type_chances['chances']; ?>" name="chances" id="chances"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to type_chances</a>
</body>
</html>