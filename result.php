<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
	die('could not connect:'.mysqli_error());
}
mysqli_select_db($con,"motors");
$q="select * from motors";
$result=mysqli_query($con,$q); 
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table align ="center" border ="1px" style ="width:700px; line-height:60px;">

<tr>
    <th>Motor1</th>
	<th>Motor2</th>
	<th>Motor3</th>
	<th>Motor4</th>
	<th>Motor5</th>
	<th>Motor6</th>
</tr>
<?php 
while($rows=mysqli_fetch_assoc($result))
{
	$Motor1=$rows['motor1'];
    $Motor2=$rows['motor2'];
    $Motor3=$rows['motor3'];
    $Motor4=$rows['motor4'];
    $Motor5=$rows['motor5'];
    $Motor6=$rows['motor6'];
	?>
	<tr>
	<td><?php echo $Motor1 ?></td>
	<td><?php echo $Motor2 ?></td>
	<td><?php echo $Motor3 ?></td>
	<td><?php echo $Motor4 ?></td>
	<td><?php echo $Motor5 ?></td>
	<td><?php echo $Motor6 ?></td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>