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
  <li><a  href="MainPage.php">Home</a></li>
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
   <li><a href="deletepage.php">Remove Deatils</a></li>
   <li><a class="active" href="mongo.php">NoSQL Database Operation</a></li>
   

 	<li style="float:right"><a href="AdminLoginPHP.php">Admin logout</a></li>
</ul>

  <div class="row">

    <div class="columnleft" style="background-color:#aaa;">
        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="imgss1.jpeg" style="width:100%">
  <div class="text">Path to your Dream</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="imgss2.jpeg" style="width:100%">
  <div class="text">Freedom to study</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="imgss3.jpg" style="width:100%">
  <div class="text">Relaxtion you Want</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    </div>
  
    <div  style="background-color:#6A5ACD;">
    <span>
<ol style="display: inline-block; list-style-type: none; width: 49%; ">
<li ><a href="nosreg.php">Student Registration With NoSQL DB</a></li>
<li><a href="noareg.php">Acedamic Registration With NoSQL DB</a></li>
<li><a href="nonreg.php">Non Acedamic Registration With NoSQL DB</a></li>
<li><a href="studentfind.php">Student Details in NoSQl</a></li><br>
<li><a href="afind.php">Acedamic Details in NoSQl</a></li>
<li><a href="nfind.php">Non Acedamic Details in NoSQl</a></li>
<li><a href="pformmongo.php">Payments in NoSQl</a></li>
<li><a href="pfindmongo.php">Payment Details in NoSQl</a></li>
<li><a href="mdel.php">Remove Details in NoSQl</a></li>
<li><a href="mupdate.php">Update Details in NoSQl</a></li>
</ol>

</span>
  
    
    </div>
  




</body>
</html>
