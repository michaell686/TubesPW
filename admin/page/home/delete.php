<?php
    include('koneksi.php');
    include('../../functions/HomeFunction.php');
    
    $msg = deleteHome($_GET['id']);
?>

<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to home</a>