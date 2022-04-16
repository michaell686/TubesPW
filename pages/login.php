<?php
include('../functions/UserFunction.php');

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $md5Password = md5($password);
    $result = login($username, $md5Password);
    if ($result != null) {
        $_SESSION['my_session'] = true;
        $_SESSION['session_user'] = $result['nama'];
        $_SESSION['session_role'] = $result['role'];
        $_SESSION['session_point'] = $result['point'];
        $_SESSION['session_token'] = $result['token'];
        $_SESSION['session_username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['hash_password'] = $md5Password;
        if($result['role'] == 'admin') {
            header("location:../admin/index.php");
        } else {
            header("location:index.php");
        }
        
    } else {
        echo '<div class="bg-info">Invalid Username or Password</div>';
    }
}
?>

<div class="container-login">
<form method="post" class="form-sign-in">
    <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
    <label for="username" class="sr-only">UserID</label>
    <input type="text" id="username" name="username" autofocus required
           placeholder="User ID" class="form-control">
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" required
           class="form-control" placeholder="Password">
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In"
           name="btnSignIn">
</form></div>