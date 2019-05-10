<?php 
include("../connection/connect.php");
$id=$_REQUEST['id'];
mysqli_query($db,"delete from contact where `id`='".$id."'");
header('location:viewfeedback.php');
?>