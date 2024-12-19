<?php
    include "config/db.php";
    include "config/fun.php";
    $connect=new connect();
    $fun=new fun($connect->dbconnect());

    if(isset($_GET['status'])){
        echo "<script>alert('Are you sure? " . $fun->update_Project_status($_GET['id']) . "'); window.location.href = 'view_current_project.php';</script>";
    }
    
        // $result = $fun->update_Project_status($_GET['id']);
        // if($result){
        //     $msg = "updated";
        // }
        // else{
        //     $msg = "Something went wrong";
        // }
        // echo $msg;
        // header("location:view_student.php?msg=$msg");
    

?>