<?php
    include('../../../koneksi.php');
    include('../../functions/FeedbackFunction.php');
    
    $msg = deleteFeedback($_GET['id']);
?>

<div><?php if(isset($msg)) { echo $msg; } ?></div>
<a href="index.php">Back to feedback</a>