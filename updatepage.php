<html>
<head>
	<title>NoSQl</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="mongocss.css">
  <link rel="stylesheet" type="text/css" href="MainPageCSS.css">
  <style>
  * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}

  ol {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 300px;
  
}

li a {
  display: block;
  color: red;
  padding: 8px 16px;

}

li a.active {
  background-color: #4CAF50;
  color: black;
}

li a:hover:not(.active) {
  background-color: #555;
  color: black;
}
}
  </style>
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
   <li><a href="paymentform.php">Paments</a></li>
   <li><a href="labform.php">Labs</a></li>
   <li><a href="tuteform.php">Tutes</a></li>
   <li><a href="lecform.php">Lectures</a></li>

 	<li style="float:right"><a href="AdminLoginPHP.php">Admin logout</a></li>
</ul>
<p><b>Student Address Update</p>
<form action="updateq.php" method="get">
    <table>

<tr><td>Student ID</td><td> <input type="text" name="id"></td></tr>

<tr><td>Address</td><td> <input type="text" name="add"></td></tr>
<tr><td>New Address</td><td><input type="text" name="nadd"></td></tr>

<tr><td><input type="submit"></td></tr>
</table>
</form>

<hr>

<p><b>Acedamic Employee Position Update</p>
<form action="updatea.php" method="get">
    <table>

<tr><td>Acedamic Employee ID</td><td> <input type="text" name="aid"></td></tr>

<tr><td>Current Position</td><td> <select name="pos">
    <option value="Senior Lecturer">Senior Lecturer</option>
    <option value="Lecturer">Lecturer</option>
    <option value="Assistant Teacher">Assistant Teacher</option>
    <option value="Tutor">Tutor</option>
    <option value="Instructor">Instructor</option>
    </select></td></tr>
   
    <tr><td>New Position</td><td> <select name="npos">
    <option value="Senior Lecturer">Senior Lecturer</option>
    <option value="Lecturer">Lecturer</option>
    <option value="Assistant Teacher">Assistant Teacher</option>
    <option value="Tutor">Tutor</option>
    <option value="Instructor">Instructor</option>
    </select></td></tr>


<tr><td><input type="submit"></td></tr>
</table>
</form>

<hr>
<p><b>Non Acedamic Employee Salary Update</p>
<form action="updaten.php" method="get">
    <table>
    
   

<tr><td>Non Acedamic Employee ID</td><td> <input type="text" name="nid"></td></tr>

<tr><td>Current Salary</td><td> <input type="text" name="sal"></td></tr>
<tr><td>New Work Salary</td><td><input type="text" name="nsal"></td></tr>

<tr><td><input type="submit"></td></tr>
</table>
</form>

</body>
</html>
