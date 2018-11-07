<html>
<body>
	<table>
<?php


$conn=mysqli_connect("localhost","root","");
$result=mysqli_select_db($conn,'inventory')or die("not selected");
 
$sql="SELECT * FROM admindb where 1";

$result=mysqli_query($conn,$sql); 	
while($row=mysqli_fetch_array($result))
{
	echo "<tr><td>".$row['pid'];
	echo "<td>".$row['product'];
	echo "<td>".$row['type'];
	echo "<td>".$row['total'];
	echo "<td>".$row['inuse'];
	echo "<td>".$row['stock'];
}
?>
</table>
</body>
</html>