<?php
    include('../../../koneksi.php');
    include('../../functions/MapFunction.php');
    session_start();

    if (!isset($_SESSION['my_session'])) {
        $_SESSION['my_session'] = false;
    }
    
    $msg = deleteMap($_GET['id']);
?>
<?php
    if ($_SESSION['my_session']) {
?>
<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to Map</a>
<?php
    }
?>