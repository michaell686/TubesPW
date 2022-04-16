<?php
    include('koneksi.php');
    
    $query = "DELETE FROM prize_chances WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($koneksi, $query)) {
        echo "Deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
?>
<a href="index.php">Back to prize_chances</a>