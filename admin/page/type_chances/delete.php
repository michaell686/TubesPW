<?php
    
    $query = "DELETE FROM type_chances WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($koneksi, $query)) {
        echo "Deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
?>
<a href="index.php">Back to type chances</a>