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
            header("Location: welcome.php"); 
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
    <title>Owner Login</title>
<?php 
    if(isset($_GET["msg"])){
        $msg = $_GET["msg"];
        
    }
    //print_r($_SESSION);
?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
        }
        button {
            margin-top: 15px;
        }
    </style>
</head>
<body> 
<h1></h1>
    <div class="container">
        <h2 class="mb-4">Owner Login</h2>

        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="userid" class="form-label">User ID:</label>
                <input type="text" class="form-control" id="userid" name="userid" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <input type="submit" class="btn btn-primary" name="login">
        </form>

       
    </div>
   

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
