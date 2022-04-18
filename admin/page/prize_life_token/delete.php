<?php
    include('../../../koneksi.php');
    include('../../functions/Prize_life_tokenFunction.php');
    session_start();

    if (!isset($_SESSION['my_session'])) {
        $_SESSION['my_session'] = false;
    }
    
    $msg = deletePrize_life_token($_GET['id']);
?>
<?php
    if ($_SESSION['my_session']) {
?>
<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to Prize life token</a>
<?php
    }
?>