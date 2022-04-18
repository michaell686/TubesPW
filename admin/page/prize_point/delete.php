<?php
    
    $query = "DELETE FROM prize_point WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($koneksi, $query)) {
        echo "Deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
?>
<a href="index.php">Back to Prize Point</a>