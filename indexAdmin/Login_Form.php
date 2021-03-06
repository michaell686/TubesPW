<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<?php
	session_start();
?>
<body>
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <img src="Asset/new/1.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
		<label for="username" class="sr-only">Username</label>
		<input type="text" id="username" name="username" autofocus required
			placeholder="User ID" class="form-control">
		<label for="password" class="sr-only">Password</label>
		<input type="password" id="password" name="password" required
           class="form-control" placeholder="Password">
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In"
           name="btnSignIn">
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="location.href = 'homePage.php'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>


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
            header("location:../admin/indexAdmin.php");
        } else {
            header("location:homePage.php");
        }
        
    } else {
        echo '<div class="bg-info">Invalid Username or Password</div>';
    }
}

?>

</body>
</html>
