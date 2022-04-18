<?php
    include('../../functions/HomeFunction.php');
    session_start();

    if (!isset($_SESSION['my_session'])) {
        $_SESSION['my_session'] = false;
    }
    
    $msg = deleteHome($_GET['id']);
?>
<?php
    if ($_SESSION['my_session']) {
?>
<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to home</a>
<?php
    }
?>