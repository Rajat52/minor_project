<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeTrek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
  <body>
  	<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">TOTAL</a>
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
   <div class="container mt-5">
  <table class="table">
  <thead>
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

  </tbody>
</table>
 <div class="row ">
    <button type="button" class="btn btn-dark ml-auto"><a href="" class="nav-link">
      send</a>
    </button>
    </div>
   <div class="container">
    <footer align="center" class="bg-light py-3 container-fluid mt-5;">
        <span class="text-primary"><i class="fas fa-toolbox"></i> inventory</span>
       </footer>
</body>
 </html>