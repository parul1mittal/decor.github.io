
<html>
<?php
include "connection/connect.php";
?>
    <head>
      <link rel="icon" type="image/png" sizes="16x16" href="images/img/logo9.jpg">
        <title>boutique</title>
        <meta charset="UTF-8">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="wow.min.js"></script>
   <link rel="stylesheet" href="animate.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css" >
    </head>
    <body style="background-image:url('images/login4.jpg');background-blend-mode: lighten;">
         <nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>

              <img style="margin-left: -260px;margin-top:10px;
    padding: 8px;length:45px;width:45px;" src="images/img/logo9.jpg" alt="homepage"  />

                  <a class="navbar-brand" href="index.php"> <img style="length:185px;width:185px"class="img-rounded" src="images/img/logo6.png" alt=""> </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"> <a class="nav-link active" href="index.php" style=" font-size:18px;color:black">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="boutique.php" style=" font-size:18px;color:black">Boutiques <span class="sr-only"></span></a> </li>
                            
            <!--  <?php
            if(empty($_SESSION["user_id"]))
              {
                echo '<li class="nav-item"><a href="login.php" class="nav-link active" style=" font-size:18px;color:white">Login</a> </li>
                <li class="nav-item"><a href="registration.php" class="nav-link active" style=" font-size:18px;color:white">Signup</a> </li>';
              }
            else
              {
                  
                  
                    echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your orders</a> </li>';
                  echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
              }

            ?>-->
               
                        </ul>
                  </div>
               </div>
            </nav>
        
        <br>
        <br>
        
        
        
        
        
        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                  <center>  <h1><b>CONTACT </b></h1>
                    <p> GET IN TOUCH WITH US. </p></center><br>
                    <form method="post" action="">
                    <div class="col-lg-6 col-md-6 ">
                        <div class="input-group input-group-lg" >
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true" > </i></span>
                             <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="full name" name="full_name" required=""> 
                        </div>
                        <br>   
                         <div class="input-group input-group-lg ">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"> </i></span>
                            <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="phone number" name="phone_number" pattern=".{10,}" required>
                            
                        </div>
                           <br>   
                         <div class="input-group input-group-lg " >
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"> </i> </span>
                            <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="email address" name="email_address" pattern="[a-z0-9._%-+]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                          
                            
                        </div>    
                        
                       
                        
                     </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="input-group">
                            <textarea   cols="90" rows="6" class="form-control" name="message" required=""></textarea>
                            
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg" style="margin-left: 8px;background-color:#f30;color:white" name="submit"  >Submit your message</button>
                      </form>
                     </div> 
                </div>    
            </div>
        </div>

         
         <br><br><br><br><br><br>

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
                                    <a style="font-size: 22px;padding: 6px;" href="https://www.facebook.com/fabriclore" class="fa fa-facebook" target="_blank"></a>
                                
                            
                                   <a style="font-size: 22px;padding: 6px;" href="https://twitter.com/fabriclore" class="fa fa-twitter" target="_blank"></a>
                                
                                
                                   <a style="font-size: 22px;padding: 6px;" href="https://www.instagram.com/fabriclore_estore/" class="fa fa-instagram" target="_blank"></a>
                                
                                
                                    <a style="font-size: 22px;padding: 6px;" href="https://www.pinterest.com/fabriclore/" class=" fa fa-pinterest" target="_blank"></a>
                                
                               
                            </ul>
                        
                          
                        
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs --><br><br><br>
                <div class="bottom-footer">
                   
                       
                            <center>
                            <p style="font-size:15px;color:white">Copyright 2019 All rights reserved | Design Your Own with FABRICLORE.COM.The Most Loved Online Fabric Store.Shipping Across Jodhpur</p> </div></center>
                       
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
       <?php

  if(isset($_POST['submit'])){
    $full_name=$_REQUEST['full_name'];
    $phone_number=$_REQUEST['phone_number'];
    $email_address=$_REQUEST['email_address'];
      $message=$_REQUEST['message'];


    $sql="insert into contact(full_name,phone_number,email_address,message) values('$full_name','$phone_number','$email_address','$message')";
    $res=mysqli_query($db,$sql);

    if($res)
    {
      echo "<script> alert('thanku for contacting us');</script>";
    }

    else { 
      echo "<script> alert('pls fill out the information first');</script>";
        }
   }


?>     <br><br><br><br>
        
       
        
      
            <!-- start: FOOTER -->
    
        
        
        
        
        
        
        
        
        
    </body>
</html>
