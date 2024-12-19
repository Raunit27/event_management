<?php 
    session_start(); 
    include "config/db.php";
    include "config/fun.php";
    $connect=new connect();
    $fun=new fun($connect->dbconnect());
    $msg=""; 
    
    if(isset($_POST["login"])){
        $uname = $_POST["userid"];
        $pass = $_POST["password"];
        $pass = strval($pass);
        // echo $pass;
        // echo gettype($pass)."<br>";
        $result = $fun->login($uname,$pass);
        //  print_r( $_POST);
        //  echo "<br>";
        if(!empty($result)){ 
            $_SESSION["uname"] = $uname;
            $_SESSION["is_start"] = true;
            header("Location: client_page.php"); 
        }
       
    
    else{
        $msg = "No User found pleasde put correct  Userid and Password";
        echo $msg."<br>";
       
        //header("Location: login.php?msg=$msg");
        }
    }
    else{
        $msg = "Not submitted";
       
    }
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Management Customer Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: black;
    }
    .login-container {
      margin-top: 10%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 login-container">
        <h2 class="text-center mb-4"> Customer Login</h2>
        <form action="customer_login.php" method="post">
          <div class="form-group text-white">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="userid" placeholder="Enter your ID" required>
          </div>
          <div class="form-group text-white">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
