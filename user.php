<?php

$conn=mysqli_connect("localhost","root","");
$result=mysqli_select_db($conn,'inventory')or die("not selected");
 

$user=$_REQUEST['user'];
$pwd=$_REQUEST['pwd'];
$branch=$_REQUEST['branch'];
$email=$_REQUEST['email'];


$error=0;
if ($user=="") { $error=1; echo "User Name can't empty"; }
if ($pwd=="") { $error=1; echo "password can't empty"; }
if ($email=="") { $error=1; echo "Email can't empty"; }

//$sql="SELECT * FROM users where 1";
$sql="INSERT INTO `users` (`USERNAME`, `PASSWORD`, `BRANCH`, `EMAIL`) VALUES ('$user', '$pwd', '$branch', '$email')";
 
 $result=mysqli_query($conn,$sql); 	
 if($result)
 		echo "registered succesfully";
 else 
 		echo "fail";
?>