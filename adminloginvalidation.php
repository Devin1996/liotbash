<?php
   include("dbcon123.php");

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT id FROM admin WHERE name = '$myusername' and pwd = '$mypassword'";

      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      
         header("location: MainPage.php");
      }else {
         echo  "Your Login Name or Password is invalid";
         //header("location: AdminLoginPHP.php; Refresh:5; ");

         header( "Refresh:5; url=http://localhost/php_projects_demonstration_t400s/ADBMS1996/AdminLoginPHP.php", true, 303);
      }
   }
?>