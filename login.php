<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<!DOCTYPE html>
<html>
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head><br>
  <body>
    <div class="container">
      <div class="card" style="width: 65rem;height: 40rem">
        <div class="card-body">
          <div id="LoginForm">
            <h1 align="center" style="background-color:MediumSeaGreen;font-size:50px;">login Form</h1><br><br><br>
            <div class="login-form">
              <div class="main-div">
                <div class="panel">
                  <h2>Login</h2>
                  <p>Please enter your email and password</p>
                </div>
                <form id="Login">
                  <div class="form-group">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
                  <button type="submit" class="btn btn-secondary">reset</button>
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>
      <div class="container-fluid">
       <footer align="center" class="bg-light py-3 text-center mt-5;">
        <span class="text-primary"><i class="fas fa-toolbox"></i> inventory</span>
       </footer>
     </div>
  </body>     
</html>   