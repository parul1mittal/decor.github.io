
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <meta name="google-signin-client_id" content="694231067288-eji7ojlp8dc0bcee9stl5a9oprv9280v.apps.googleusercontent.com">

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #ff3300;
	  }
	  #buttn1{
	  	color:#fff;
		  background-color: #ff3300;
	  }


	  </style>
  
</head>
<body style="background-image:url('images/boutique5.jpg');>
	<div class="bg_image" style="background-image:url('images/boutique5.jpg');">
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index err
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["user_id"] = $row['u_id']; // put user id into temp session
										 header("refresh:1;url=index.php"); // redirect to index.php page
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; // throw error
                                }
	 }
	
	
}
?>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->

<!-- Form Module--><br><br><br><br>
<div  style="width: 500px;" class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
  	<div class="pen-title">
  	 <h2 style="font-size: 30px;">Login Form</h2>
  	</div><br><br>
    <h2>Login to your account</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/><br>
      <input type="submit" id="buttn" name="submit" value="login" />
      
    </form>
  </div>
  
  <div class="cta">Not registered?<a href="registration.php" style="color:#f30;"> Create an account</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   

</div>

</body>

</html>
