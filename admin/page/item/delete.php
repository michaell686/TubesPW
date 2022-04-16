<?php
    include('koneksi.php');
    
    $query = "DELETE FROM item WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($koneksi, $query)) {
        echo "Deleted successfully <br>";
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
?>
<a href="index.php">Back to item</a>