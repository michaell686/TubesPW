<?php
    include('koneksi.php');

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
           
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
            $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
            $deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';
            $newscol = isset($_POST['newscol']) ? $_POST['newsco'] : '';
            
            $query = "UPDATE news set id='" . $id . "', judul='" . $judul . "', gambar='" . $gambar . "', deskripsi='" . $deskripsi . "' ,newscol='" . $newscol .  "' WHERE id='" . $_POST['id'] . "'";
            $result = mysqli_query($koneksi,$query);

            if($result) {
                $msg = 'Updated Successfully!';
            } else {
                $msg = 'Failed to update data!';
            }
        }

        $query = "SELECT * FROM news WHERE id = '" . $_GET['id'] . "'";
        $result = mysqli_query($koneksi, $query);
        $news = mysqli_fetch_array($result);

        if (!$news) {
            exit('news doesn\'t exist with that ID!');
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
    <h1>Edit News</h1>
    <div>
        <form action="edit.php?id=<?=$news['id']?>" method="post">
            <div><?php if(isset($msg)) { echo $msg; } ?></div>
            <label for="id">id</label><br>
            <input type="text" value="<?= $news['id']; ?>" id="id" id="id"><br>
            <label for="judul">judul</label><br>
            <input type="text" value="<?= $news['judul']; ?>" name="judul" id="judul"><br>
            <label for="gambar">gambar</label><br>
            <input type="text" value="<?= $news['gambar']; ?>" name="gambar" id="gambar"><br>
            <label for="deskripsi">deskripsi</label><br>
            <input type="text" value="<?= $news['deskripsi']; ?>" name="deskripsi" id="deskripsi"><br>
            <label for="newscol">newscol</label><br>
            <input type="text" value="<?= $news['newscol']; ?>" name="newscol" id="newscol"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <a href="index.php">Back to news</a>
</body>
</html>