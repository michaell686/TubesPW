<?php
    include('koneksi.php');
    include('../../functions/EmblemFunction.php');
    
    $msg = deleteEmblem($_GET['id']);
?>

<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to emblem</a>