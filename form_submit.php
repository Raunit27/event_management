<?php 
    session_start();
    include "config/db.php";
    include "config/fun.php";
    $connect=new connect();
    $fun=new fun($connect->dbconnect());
    $msg="";

    if(isset($_POST["submit"]))
    {
        
        
         $email=$_POST['email'];
         $result = $fun->update_gmail($email);
         header("location:index.php");
    }
    if(isset($_POST["send_msg"]))
    {
        
        $name=$_POST['name'];
         $email=$_POST['email'];
         $number=$_POST['number'];
         $subject=$_POST['subject'];
         $result = $fun->update_client($name,$email, $number, $subject);
         header("location:index.php");
    }
   
    ?>
