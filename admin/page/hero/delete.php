<?php
    include('koneksi.php');
    include('../../functions/HeroFunction.php');
    
    $msg = deleteHero($_GET['id']);
?>

<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to Hero</a>