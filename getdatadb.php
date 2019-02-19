<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="pro2";

$con = new mysqli($servername, $username, $password,$dbname);
$htmlmiddle="";$i=0;
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
$sql = "SELECT * FROM profile_master";
	$result = $con->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gender']; echo"<br/>";
		}
}
?>