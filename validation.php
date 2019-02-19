<?php
session_start();
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,'pro2');
$phone=$POST['phone'];
$pass=$POST['password'];
$s="select * from profile_master where phone='$phone' && password ='pass' ";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
	header('location:index.html');

	}
	else{
	header('location:registration.php');

	}
?>

