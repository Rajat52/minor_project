<?php  //Start the Session
session_start();
 require('connection.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['email']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['email'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
 
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
        <span class="text-primary"><i class="fas fa-code"></i> inventory</span>
       </footer>
     </div>
  </body>     
</html>   