<?php

$conn=mysqli_connect("localhost","root","");
$result=mysqli_select_db($conn,'inventory')or die("not selected");
 

$pid=$_REQUEST['pid'];
$product=$_REQUEST['product'];
$type=$_REQUEST['type'];
$total=$_REQUEST['total'];

$error=0;
if ($pid=="") { $error=1; echo "pid can't empty"; }
if ($product=="") { $error=1; echo "product can't empty"; }
if ($total=="") { $error=1; echo "total can't empty"; }
//$sql="SELECT * FROM users where 1";

$sql="INSERT INTO `admindb` (`pid`, `product`, `type`, `total`, `inuse`, `stock`) VALUES ('$pid', '$product', '$type', '$total', '', '')";
 
 $result=mysqli_query($conn,$sql); 	
 if($result)
 		echo "registered succesfully";
 else 
 		echo "fail";
?>