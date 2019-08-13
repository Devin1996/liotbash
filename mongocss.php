* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

.vheader {
    background-color: #f1f1f1;
    padding: 1px;
    text-align: center;
    font-size: 20px;
}

.vlogin {
    background-color: lightblue;
    padding: 1px;
    text-align: right;
    font-size: 15px;

}

.loginbtn {
    background-color: #4CAF50;
    color: white;
    padding: 7px 10px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    /*width: 100%;*/
    opacity: 0.9;
}

.loginbtn:hover {
    opacity: 1;
}
 

.columnleft {
    padding: 15px;
    width: 50%;
    /*height: 300px;  Should be removed. Only for demonstration */
}

.columnright {
    padding: 15px;
    width: 50%;
    /* height: 300px; Should be removed. Only for demonstration */
}  
  
.row {
    display: -webkit-flex;
    display: flex;
}

.container {
    padding: 14px;
    background-color: white;
}

/* Full-width input fields */

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

input[type=text], input[type=password], input[type=date] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 10px;
    margin: 8px 2px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    align-content: center;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

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