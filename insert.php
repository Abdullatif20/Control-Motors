<?php
$Motor1=$_POST['Motor1'];
$Motor2=$_POST['Motor2'];
$Motor3=$_POST['Motor3'];
$Motor4=$_POST['Motor4'];
$Motor5=$_POST['Motor5'];
$Motor6=$_POST['Motor6'];

$con = mysqli_connect("localhost","root","");
if (!$con)
{
	die('could not connect:'.mysqli_error());
}
mysqli_select_db($con,"motors");

$query1 = "update motors SET motor1 = '$Motor1', motor2 = '$Motor2', motor3 = '$Motor3', motor4 = '$Motor4', motor5 = '$Motor5', motor6 = '$Motor6'";

if (!mysqli_query($con,$query1))
{
	die('Error in inserting records');
}
else{
header("location:index.html");
}


?>