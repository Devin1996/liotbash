<!DOCTYPE html>
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

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employee Details</a>
    <div class="dropdown-content">
      <a href="acedamicdeatils.php">Acedamic Details</a>
      <a href="nacedamicdeatils.php">NON-Acedamic Details</a>
    </div>
 
   <li><a href="updatedata.php">Update Deatils</a></li>
   <li><a href="removedata.php">Remove Deatils</a></li>
   <li><a href="mongo.php">NoSQL Database Operation</a></li>
   

 	<li style="float:right"><a href="AdminLoginPHP.php">Admin logout</a></li>
</ul>

<form action="nonacedamicreg.php" method="post">
<div class="container">
    <h1>Non-Aceadamic Registration With NoSQL Database</h1>
    <p>Please fill in this form to create an collection.</p>
    <hr>

    <label for="essn"><b>SSN</b></label>
    <input type="text" placeholder="Enter ssn" name="essn" required>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="efname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="elname" required>

    <label for="bday"><b>Birth Day</b></label>
    <input style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;" 
            type="date" placeholder="Enter Birth date" name="e_bday" required>


    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="eaddress" required>

    <label for="email"><b>E-mail</b></label>
    <input style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;" 
            type="email" placeholder="Enter E-mail Address" name="eemail" required>

     <label for="egender"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male" checked="" /> Male 
   <input type="radio" name="gender" value="female" /> Female  
     <br><br>

    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="eage" required>

    
    <label for="salary"><b>Salary</b></label>
    <input type="text" placeholder="Enter Salary" name="salary" required>
    
    <label for="postion"><b>Position</b></label>    
    <select style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px; "name="positi">
    <option value="Electrician">Electrician</option>
    <option value="Cleaner">Cleaner</option>
    <option value="Chef">Chef</option>
    <option value="Receptionist">Receptionist</option>
    <option value="Technician">Technician</option>
    </select>
    
    <label for="group"><b>Group</b></label>
    <input type="text" placeholder="Enter Group" name="groups" required>

    <label for="worktype"><b>Work Type</b></label>
    <input type="text" placeholder="Enter Works" name="worktype" required>


    <hr>

    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
  
  

</form>

</body>
</html>
