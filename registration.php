<?php

  session_start();

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'database');
  $username = $_POST['username'];
  $password = $_POST['password'];

  $s = "SELECT * FROM registration where username = '$username'"; 

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

if($num == 1){
    echo "";
}else{
    $reg=" insert into registration(username, password) VALUES('$username' , '$password')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}


?>

<style>
  .text-center a{
    text-decoration: none;
    color: black;
  }

  a:hover {
    text-decoration: underline;
    cursor: pointer;
  }
</style>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center"><a href="index.php">Sign up page</a></h1>
    <div class="container mt-5">
    <form action="registration.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</div>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>