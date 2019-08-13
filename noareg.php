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

<form action="noaregmongo.php" method="post">
<div class="container">
    <h1>Aceadamic Registration Using NoSQL Database</h1>
    <p>Please fill in this form to insert for the collection</p>
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
            type="date" placeholder="Enter Birth date" name="ebday" required>

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
    <input type="radio" name="egender" value="male" checked="" /> Male 
   <input type="radio" name="egender" value="female" /> Female  
     <br><br>


    <label for="eage"><b>Age</b></label>
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
                  border-radius: 10px;"name="posit">
    <option value="Senior Lecturer">Senior Lecturer</option>
    <option value="Lecturer">Lecturer</option>
    <option value="Assistant Teacher">Assistant Teacher</option>
    <option value="Tutor">Tutor</option>
    <option value="Instructor">Instructor</option>
    </select>

    <label for="depid"><b>Department</b></label>    
    <select style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;"name="edept_id">
    <option value="123">DOP</option>
    <option value="7633">DON</option>
    <option value="7133">DOS</option>
    <option value="7744">DOW</option>
    </select>
    
    <label for="qualification"><b>Qualification</b></label>
    <input type="text" placeholder="Enter Qualifications" name="qualifications" required>
    
    <label for="subjects"><b>Subjects</b></label><br>
    <div style="width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  border-radius: 10px;">
                  
    <input type="checkbox" name="subjects" value="Web" checked>Web Application development<br>
    <input type="checkbox" name="subjects" value="Network">Computer Network<br>
    <input type="checkbox" name="subjects" value="Security" checked>Network Security<br>
    <input type="checkbox" name="subjects" value="mobile" checked>Mobile Application development<br>
    <input type="checkbox" name="subjects" value="oop" checked>OOP programming<br>
    </div>
    <hr>

    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
  
  

</form>

</body>
</html>
