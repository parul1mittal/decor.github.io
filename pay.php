


<?php
session_start();
include("connection/connect.php");


if(isset($_POST['submit'] ))
{
if(empty($_POST['firstname']) ||  //fetching and find if its empty
        empty($_POST['lastname'])|| 
        empty($_POST['email']) ||  
        empty($_POST['address'])||
        empty($_POST['city'])||
        empty($_POST['pincode']) ||
        empty($_POST['contactno']))
        {
            $message = "All fields must be Required!";
        }
else{

$check_email = mysqli_query($db, "SELECT email FROM checkout_address where email = '".$_POST['email']."' ");



    $mql="INSERT INTO checkout_address(firstname,lastname,email,address,city,pincode,contactno)VALUES('".$_POST['firstname']."','".$_POST['lastname']."', '".$_POST['email']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['contactno']."')";
    mysqli_query($db, $mql);

    $res=mysqli_query($db,"select id from checkout_address order by id desc limit 1");
    while($row=mysqli_fetch_array($res))
    {
        $_SESSION["order_id"]=$row["id"];
    }


    ?>
<script type="text/javascript">
    alert("click ok to transferring into paypal");

    setTimeout(function(){
        window.location="paypal.php";
    },4000);
</script>

    <?php
}
}

?>
<html>
<body>
    <center><h2>Bill To</h2></center>
<form name="form1" action="" method="post">
<center>
<table  cellpadding="4px;" cellspacing="10px;" style="background-color:rgba(0,0,255,0.2)">

<tr>
<td><lable >FirstName:</lable></td>
<td><input name="firstname"   type="text" placeholder="Enter first name" required=""></td>
</tr>

<tr>
    <td><lable >LastName:</lable></td>
<td><input name="lastname" type="text" placeholder="Enter last name" required=""></td>
</tr>

<tr>
<td><lable>Email:</lable></td>
<td><input name="email" type="email" required=""></td>
</tr>

<tr>
<td><lable>Address:</lable></td>
<td><input name="address" type="text" placeholder="Enter Address" required=""></td>
</tr>

<tr>
<td><lable>city:</lable></td>
<td><input name="city" type="text" placeholder="Enter city" required=""></td>
</tr>


<tr>
<td><lable>Pincode:</lable></td>
<td><input name="pincode" type="text" placeholder="Enter pincode" required=""></td>
</tr>

<tr>
<td><lable>Contact:</lable></td>
<td><input name="contactno" type="number" required=""></td>
</tr>
<tr>

<td><input type="submit" value="save" name="submit"></td>

</center>
</table>

</form>




    </body>
</html>