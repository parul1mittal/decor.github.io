<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Boutique</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/img/logo9.jpg">
    <title>Boutique</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  
 
  
  .navbar {
    margin-bottom: 0;
    background-color: #f6f6f6;
    z-index: 9999;
    border: 0;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    color:black;
  }
  .navbar li a, .navbar .navbar-brand {
    color: black !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: black;
    color: #fff !important;
  }
  

    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
  </style>
</head>
<body>
  <nav  class="navbar navbar-default navbar-fixed-top">
  <div  class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img style="margin-left: -254px;
    padding: 8px;length:45px;width:45px;" src="images/img/logo9.jpg" alt="homepage"  />
         <a class="navbar-brand" href="index.php"> <img style="margin-left: 30px;length:185px;width:185px;margin-top: -8px;"class="img-rounded" src="images/img/logo6.png" alt=""> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="boutique.php">Boutiques</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">SignUp</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav><br><br><br>
<center><h2> Taking on Unknown Waters </h2></center>
<center><p>We are a team of really passionate, patient and free-thinking individuals, and our complimenting personal & professional pedigree make us even more unique. Consistent persuasion is the common thread binding us together.</p></center>

<br>

<div class="row">
  <div class="column">
    <div style="margin-left: 80px;"class="card">
      <img src="images/person1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Parul Mittal</h2>
        <p class="title">CEO & Founder</p>
        <p>We are a studio that aims to make our exp.</p>
        <p>parulmital1997@gmail.com</p>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div style="margin-left: 80px;" class="card">
      <img src="images/person3.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Ekta Choudhary</h2>
        <p class="title">Founder & VP - Operations</p>
        <p>We are a studio that aims to make our exp.</p>
        <p>ektachoudhary21@gmail.com</p>
       
      </div>
    </div>
  </div>
  <div class="column">
    <div style="margin-left: 80px;" class="card">
      <img src="images/person2.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Pooja Bhakar</h2>
        <p class="title">Founder & VP - Operations</p>
        <p>We are a studio that aims to make our exp. </p>
        <p>poojabhakar31@gmail.com</p>
      
      </div>
    </div>
  </div>
</div>










<br>
 <footer class="footer">

            <div class="container">

                <!-- top footer statrs -->
                <div class="row top-footer">

                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img style="length:185px;width:185px"src="images/img/logo6.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5 style="font-size: 20px;">About Us</h5>
                        <ul>
                             <li><a href="about.php">About us</a> </li>
                            <li><a href="contact.php">Contact Us</a> </li>
                            <li><a href="team.php">Our Team</a> </li>
                            <li><a href="boutique.php">Our Collection</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5 style="font-size: 20px;">Popular Catalogue</h5>
                        <ul>
                           <li> <a href="http://localhost/boutique/catalogue.php?res_id=57">
                                    Acessories
                                    </a> </li>
                        <li> <a href="http://localhost/boutique/catalogue.php?res_id=63">
                                    Ethenic Wear
                                    </a> </li>
                         <li> <a href="http://localhost/boutique/catalogue.php?res_id=60" >
                                    Contemporary
                                    </a> </li>
                        <li> <a href="http://localhost/boutique/catalogue.php?res_id=62">
                                    Cushion Cover
                                    </a> </li>
                     <li> <a href="http://localhost/boutique/catalogue.php?res_id=61">
                                    Curtains
                                    </a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5 style="font-size: 20px;">Menu</h5>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="http://localhost/boutique/boutique.php">Boutiques</a> </li>
                            <li><a href="login.php">Login</a> </li>
                            <li><a href="http://localhost/boutique/registration.php">Sign Up</a> </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5 style="font-size: 20px;">Contact Us</h5>
                        <ul>
                             <li>
                           <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Jodhpur(RAJ)</a>
                        </li><br>
                             <li>
                           <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">+919414393593</a>
                        </li><br>
                            <li>
                           <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">fabriclore.com</a>
                        </li> 
 <br><br>
                       
                            
                                <li>
                                    <a style="font-size: 22px;padding: 6px;" href="https://www.facebook.com/fabriclore" class="fa fa-facebook"></a>
                                
                            
                                   <a style="font-size: 22px;padding: 6px;" href="https://twitter.com/fabriclore" class="fa fa-twitter"></a>
                                
                                
                                   <a style="font-size: 22px;padding: 6px;" href="https://www.instagram.com/fabriclore_estore/" class="fa fa-instagram"></a>
                                
                                
                                    <a style="font-size: 22px;padding: 6px;" href="https://www.pinterest.com/fabriclore/" class=" fa fa-pinterest"></a>
                                
                               
                            </ul>
                        
                          
                        
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs --><br><br><br>
                <div class="bottom-footer">
                   
                       
                            <center>
                            <p style="font-size:15px;color:white">Copyright 2018 All rights reserved | Design Your Own with FABRICLORE.COM.The Most Loved Online Fabric Store.Shipping Across Jodhpur</p> </div></center>
                       
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
</body>
</html>