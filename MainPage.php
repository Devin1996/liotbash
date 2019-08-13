<html>
<head>

	<title>LIOT</title>
	<link rel="stylesheet" type="text/css" href="MainPageCSS.css">
  <link rel="stylesheet" type="text/css" href="calender.css">
  
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

<div class="row">
  <div class="column side" style="background-color:#aaa;">
  
  <div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      August<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

 <img src="side1.jpeg" alt="Avatar" class="avatar">
  </div>
  
  <div class="column middle" style="background-color:#bbb;">
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
<p>Information and communications technology (ICT) is an extensional term for information technology (IT) that stresses the role of unified communications[1] 
  and the integration of telecommunications (telephone lines and wireless signals) and computers, as well as necessary enterprise software, 
  middleware, storage, and audiovisual systems, that enable users to access, store, transmit, and manipulate information.

The term ICT is also used to refer to the convergence of audiovisual and telephone networks with computer networks 
through a single cabling or link system. There are large economic incentives 
(huge cost savings due to the elimination of the telephone network) 
to merge the telephone network with the computer network system using a single unified 
system of cabling, signal distribution, and management. ICT is an umbrella term that includes 
any communication device, encompassing radio, television, cell phones, computer and network hardware, 
satellite systems and so on, as well as the various services and appliance with them such as video
 conferencing and distance learning.

ICT is a broad subject and the concepts are evolving.[4] It covers any product that will store, 
retrieve, manipulate, transmit, or receive information electronically in a digital form 
(e.g., personal computers, digital television, email, or robots). For clarity, Zuppo provided an 
ICT hierarchy where all levels of the hierarchy "contain some degree of commonality in that they 
are related to technologies that facilitate the transfer of information and various types of 
electronically mediated communications".[5] Theoretical differences between interpersonal-communication
 technologies and mass-communication technologies have been identified by the philosopher Piyush Mathur.
 Skills Framework for the Information Age is one of many models for describing and managing 
 competencies for ICT professionals for the 21st century.</p>

  </div>
  
  <div class="column side" style="background-color:#ccc;">
  <canvas id="canvas" width="350" height="350" style="background-color:#333">
   </canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

<br>
<br>
<br>
<br>
<br>

<img src="side2.jpg" width="350" height="350" >
</div>


</div>

<div class="footer">
  <p>Footer</p>
</div>
	</body>

</html>