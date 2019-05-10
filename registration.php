<!DOCTYPE html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['firstname']) ||  //fetching and find if its empty
   	    empty($_POST['lastname'])|| 
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
		//cheching username & email if already present
	$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");
		

	
	if($_POST['password'] != $_POST['cpassword']){  //matching passwords
       	$message = "Password not match";
    }
	elseif(strlen($_POST['password']) < 6)  //cal password length
	{
		$message = "Password Must be >=6";
	}
	elseif(strlen($_POST['phone']) < 10)  //cal phone length
	{
		$message = "invalid phone number!";
	}

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$message = "Invalid email address please type a valid email!";
    }
	elseif(mysqli_num_rows($check_username) > 0)  //check username
     {
    	$message = 'username Already exists!';
     }
	elseif(mysqli_num_rows($check_email) > 0) //check email
     {
    	$message = 'Email Already exists!';
     }
	else{
       
	 //inserting values into db
	$mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['address']."')";
	mysqli_query($db, $mql);
		$success = "Account Created successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
														<script type='text/javascript'>
														function countdown() {
															var i = document.getElementById('counter');
															if (parseInt(i.innerHTML)<=0) {
																location.href = 'login.php';
															}
															i.innerHTML = parseInt(i.innerHTML)-1;
														}
														setInterval(function(){ countdown(); },1000);
														</script>'";
		
		
		
		
		 header("refresh:5;url=login.php"); // redireted once inserted success
    }
	}

}


?>


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
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
     <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>

                 <img style="margin-left: -240px;
    padding: 10px;length:45px;width:45px;" src="images/img/logo9.jpg" alt="homepage"  />

                  <a class="navbar-brand" href="index.php"> <img style="margin-left: 40px;length:185px;width:185px"class="img-rounded" src="images/img/logo6.png" alt=""> </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
							<li class="nav-item"> <a class="nav-link active" href="index.php" style=" font-size:18px;color:black">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="boutique.php" style=" font-size:18px;color:black">Boutiques <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active" style=" font-size:18px;color:black">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active" style=" font-size:18px;color:black">Signup</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active" style=" font-size:18px;color:black">Your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active" style=" font-size:18px;color:black">Logout</a> </li>';
							}

						?>
							 
                        </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">
					  <span style="color:red;"><?php echo $message; ?></span>
					   <span style="color:green;">
								<?php echo $success; ?>
										</span>
					   
					</a></li>
                    
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              
							  <form action="" method="post">
                                 <div class="row">
								  <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">User-Name</label>
                                       <input class="form-control" type="text" name="username" id="example-text-input" placeholder="UserName"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">First Name</label>
                                       <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="First Name"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Last Name</label>
                                       <input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Last Name"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Email address</label>
                                       <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Phone number</label>
                                       <input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Phone"> <small class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Password</label>
                                       <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Repeat password</label>
                                       <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Password"> 
                                    </div>
									 <div class="form-group col-sm-12">
                                       <label for="exampleTextarea">Delivery Address</label>
                                       <textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea>
                                    </div>
                                   
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" value="Register" name="submit" class="btn theme-btn"> </p>
                                    </div>
                                 </div>
                              </form>
                           
						   </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">
                        <h4>Registration is fast, easy, and free.</h4>
                        <p>Once you"re registered, you can:</p>
                        <hr>
                        <img src="images/img/th9.jpg" alt="" class="img-fluid">
                        <p></p>
                        <div class="panel">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>
What are the different modes of refund available?</a></h4>
                           </div>
                           <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                              <div class="panel-body"> Refunds are made to the original modes of payment for:Credit cards,Debit cards,For cash on delivery, refund will be to your bank account.  </div>
                           </div>
                        </div>
                        <!-- end:panel -->
                        <div class="panel">
                           <div class="panel-heading">
                              <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2" aria-expanded="true"><i class="ti-info-alt" aria-hidden="true"></i>What are the different modes of payment available?</a></h4>
                           </div>
                           <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                              <div class="panel-body"> You can use any one of the following payment methods:

Credit card/Debit card

Cash on Delivery
 </div>
                           </div>
                        </div>
                        <!-- end:Panel -->
                        <h4 class="m-t-20">Contact Customer Support</h4>
                        <p> If you"re looking for more help or have a question to ask, please </p>
                        <p> <a href="contact.php" class="btn theme-btn m-t-15">Contact us</a> </p>
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section><br><br>
           
            <!-- start: FOOTER -->
            <footer class="footer">

            <div class="container">

                <!-- top footer statrs -->
                <div class="row top-footer">

                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img style="length:185px;width:185px"src="images/img/logo6.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                             <li><a href="about.php">About us</a> </li>
                            <li><a href="contact.php">Contact Us</a> </li>
                            <li><a href="team.php">Our Team</a> </li>
                            <li><a href="boutique.php">Our Collection</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>Popular Catalogue</h5>
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
                        <h5>Menu</h5>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="http://localhost/boutique/boutique.php">Boutiques</a> </li>
                            <li><a href="login.php">Login</a> </li>
                            <li><a href="http://localhost/boutique/registration.php">Sign Up</a> </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Contact Us</h5>
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
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>