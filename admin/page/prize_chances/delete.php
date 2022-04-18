<?php
    include('../../functions/Prize_ChancesFunction.php');
    session_start();

    if (!isset($_SESSION['my_session'])) {
        $_SESSION['my_session'] = false;
    }
    
    $msg = deletePrize_chances($_GET['id']);
?>
<?php
    if ($_SESSION['my_session']) {
?>
<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to Hero</a>
<?php
    }
?>