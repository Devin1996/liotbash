<?php
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

<form action="StudentRegisterXML.php" method="post">
  <div class="container">
    <h1>Student Registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="ssn"><b>SSN</b></label>
    <input type="text" placeholder="Enter ssn" name="s_ssn" required>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="s_fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="s_lname" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="s_address" required>

    <label for="email"><b>E-mail</b></label>
    <input style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;" 
            type="email" placeholder="Enter E-mail Address" name="s_email" required>

     <label for="gender"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male" checked="" /> Male 
   <input type="radio" name="gender" value="female" /> Female  
     <br><br>
    <label for="bday"><b>Birth Day</b></label>
    <input style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;" 
            type="date" placeholder="Enter Birth date" name="s_bday" required>

    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="s_age" required>

    <label for="payment_method"><b>Payment Method</b></label>
    <select style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;"name="paymentmethod">
    <option value="credit">Visa Card</option>
    <option value="cash">Cash</option>
    </select>
    
    <label for="timeperiod"><b>Time Period</b></label>
    <input style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;" type="date" placeholder="Enter Period" name="t_period" required>
    
    <label for="udegree_code"><b>Degree Code</b></label>    
    <select style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;"name="degreecode">
    <option value="123">BSC(Hons) in SE</option>
    <option value="456">BSC(Hons) in MIS</option>
    <option value="789">BSC(Hons) in CS</option>
    <option value="147">BSC(Hons) in CN</option>
    <option value="258">BSC(Hons) in NS</option>
    </select>
    
    <hr>

    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
  

</form>

</body>
</html>
