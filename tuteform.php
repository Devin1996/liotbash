<?php
//tute
include_once 'dbcon123.php'


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="RegisterCSS.css">
<link rel="stylesheet" type="text/css" href="MainPageCSS.css">
</head>
<body>
<div class="header">
      <h2 style="color:#808080">Lanka Institute Of Technology</h2>
    </div>

    <ul >
  <li><a class="active" href="MainPage.php">Home</a></li>
  <li><a href="StudentRegisterPHP.php">Student Registration</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employee Registration</a>
    <div class="dropdown-content">
      <a href="AcedamicRegisterPHP.php">Acedamic Registration</a>
      <a href="NAcedamicRegisterPHP.php">NON-Acedamic Registration</a>
    </div>
  </li>
  <li><a href="studentdetails.php">Student Details</a></li>

  
    <li><a href="empdetails.php" class="dropbtn">Employee Details</a></li>

 
   <li><a href="updatepage.php">Update Deatils</a></li>
   <li><a href="removedata.php">Remove Deatils</a></li>
   <li><a href="mongo.php">NoSQL Database(Mongo)</a></li>
   <li><a href="modform.php">Modules</a></li>
   <li><a href="pamentform.php">Payments</a></li>
   <li><a href="labform.php">Labs</a></li>
   <li><a href="tuteform.php">Tutes</a></li>
   <li><a href="lecform.php">Lectures</a></li>

 	<li style="float:right"><a href="AdminLoginPHP.php">Admin logout</a></li>
</ul>

<form action="tuteq.php" method="post">
  <div class="container">
    <h1>Enter New Models</h1>
    <p>Please fill in this form to inser a new Module.</p>
    <hr>

    <label for="iessn"><b>Enter Employee SSn</b></label>
    <input type="text" placeholder="Enter employee ssn" name="iessn" required>

    <label for="ihall_no"><b>Hall No</b></label>
    <input type="text" placeholder="Enter Hall Number" name="ihall_no" required>

    <label for="iussn"><b>Student Ssn</b></label>
    <input type="text" placeholder="Enter Student ssn" name="iussn" required>
    
    <label for="module_code"><b>Module Code</b></label>
    <input type="text" placeholder="Enter  Module Code" name="imodule_code" required>
  
    <hr>

    <button type="submit" name="submit" class="registerbtn">Insert Scheduled Tute</button>
  </div>
  

</form>

</body>
</html>
