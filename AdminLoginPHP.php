<!DOCTYPE html>

<?php
include_once 'dbcon123.php'


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="AdminLoginCSS.css">
<link rel="stylesheet" type="text/css" href="MainPageCSS.css">
</head>
<body>

<form action="adminloginvalidation.php" method="post">
  <div class="imgcontainer">
    <div class="header">
      <h1 style="color:#808080">Lanka Institute Of Technology</h1>
      <h4 style="color:#808080">Admin Login</h4>
    </div>
    <!--   -->  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form>

</body>
</html>