<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT admin_id, uusername, pass FROM admin";
if($_POST["submit"]=="login"){

$usrName=$_POST["email"];

$usrPwd=$_POST["password"];

$sql = "SELECT * FROM admin WHERE UserName='admin@gmail.com' and Password='admin@'";

$result = $con->query($sql);

if ($result->num_rows > 0) {

echo seccess;

} else {

echo 'fail';

}

}
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeTrek</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
  <body>
  	<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
           <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a href="*" class="nav-link">Notification</a>
          </li>
         </ul>
        </div>
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-off"></span><a href="login.html" class="nav-link">logout</a> 
        </button>
    </div>
   </nav>
  <div class="container">
    <div class="m-4 row text-center">
      <div class="col-lg-6   p-5 bg-warning">
      <button class="mt-2 btn btn-lg" type="button"><a href="total.html" class="nav-link">TOTAL</a></button>
      </div>
      <div class="col-lg-6 p-5 bg-success ">
      <button class="mt-2 btn btn-lg"  type="button"><a href="adinuse.html" class="nav-link">INUSE</a></button>
      </div>
    </div>
      <div class="m-4 row text-center">
      <div class="col-lg-6 p-5 bg-warning">
      <button class="mt-2 btn btn-lg" type="button"><a href="adrec.html" class="nav-link">RECIEVED</a></button>
      </div>
      <div class="col-lg-6 p-5 bg-success">
      <button class="mt-2 btn btn-lg" type="button"><a href="adreq.html" class="nav-link">REQUEST</a></button>
      </div>
    </div></div></div>
       <div class="container-fluid">
       <footer align="center" class="bg-light py-3 co mt-5;">
        <span class="text-primary"><i class="fas fa-toolbox"></i> inventory</span>
       </footer>
     </div>
   </div>
</body>
 </html>
 