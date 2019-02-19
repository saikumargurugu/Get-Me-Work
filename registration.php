	<?php
session_start();
$con=mysqli_connect('localhost','root','','pro2');

if (@mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {	
  //	mysqli_select_db($con,'mypro2');
  	//echo "connected";
if ($result = mysqli_query($con,"SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
  //  printf("Default database is %s.\n", $row[0]);
    $result->close();
}
$phone=$_POST['phone'];
/*echo "phone is";
echo $phone;
echo "<html> <br /> </html>";*/

$pass=$_POST['pass'];
/*echo "pass is ";
echo $pass;
echo "<html> <br /> </html>";*/

$email=$_POST['email'];
/*echo "email is";
echo $email;
echo "<html> <br /> </html>";*/

$firstname=$_POST['firstname'];
/*echo "firstname is ";
echo $firstname;
echo "<html> <br /> </html>";*/
$lastname=$_POST['lastname'];
/*echo "lastname";
echo $lastname;
echo "<html> <br /> </html>";*/

$gender=$_POST['gender'];
/*echo "gender is ";
echo $gender;
echo "<html> <br /> </html>";*/

$usertype=$_POST['usertype'];
/*echo "usertype is";
echo $usertype;
echo "<html> <br /> </html>";*/

$aadharnumber=$_POST['aadharnumber'];
/*echo "aadhaar is ";
echo $aadharnumber;
echo "<html> <br /> </html>";*/

$dob=$_POST['dob'];
/*echo $dob;
echo "<html> <br /> </html>";*/

$s="select * from profile_master where phone='$phone'";
$result=mysqli_query($con, $s);
//echo $result;
$num=mysqli_num_rows($result);
//echo $num;
if($num>=1)
{
echo "username already taken";
}
else
{
$reg="insert into profile_master(first_name,last_name,gender,aadhaar,email,phone,dob,user_type,password) values ('$firstname','$lastname','$gender','$aadharnumber','$email','$phone','$dob','$usertype','$pass')";
$res = mysqli_query($con,$reg);
if($res)
echo "Registration successful";
else
echo "errors hai isme";
}
}
?>