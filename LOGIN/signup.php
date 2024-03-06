<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'Requires/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num>0)
    {
      $exists=true;
    }
    else {
      $exists=false;
    }
    if(($password == $cpassword)){
        if($exists==false)
        {
          $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
          $result = mysqli_query($conn, $sql);
          if ($result){
              $showAlert = true;
          }
        }
        else
        {
          $showError="User already exists with above credentials.";
        }

    }
    else{
        $showError = "Passwords do not match";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cont.css" />
    <title>SignUp</title>
  </head>
  <body>
  <?php require 'Requires/nav.php' ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
    </div> ';
    sleep(5);
    header("location: login2.php");
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
    </div> ';
    echo "";
    sleep(2);
    }
    ?>
    <div class="credentials">
     <h1 class="text-center">Signup to our website</h1>
     <form class="form" action="signup.php" method="post">
        <div class="form-group">
            <label for="username"><strong>Username</strong></label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password"><strong>Password</strong></label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword"><strong>Confirm Password</strong></label>
            <input type="password" placeholder="Make sure to type the same password"class="form-control" id="cpassword" name="cpassword">
        </div>
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>
  </body>
</html>
