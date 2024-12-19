   <?php
    include "config/db.php";
    include "config/fun.php";
    $connect=new connect();
    $fun=new fun($connect->dbconnect());
    
    if(isset($_GET['event'])){
        $result = $fun->deleteEvent($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }

    if(isset($_GET['manager'])){
        $result = $fun->deleteManager($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }
 
    if(isset($_GET['client'])){
        $result = $fun->deleteClient($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }

    if(isset($_GET['staff'])){
        $result = $fun->deleteStaff($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }

    if(isset($_GET['project'])){
        $result = $fun->deleteProject($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }
     
    if(isset($_GET['venue'])){
        $result = $fun->deleteVenue($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }

    if(isset($_GET['category'])){
        $result = $fun->delete_event_category($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }

    if(isset($_GET['intrested_client'])){
        $result = $fun->delete_intrested_client($_GET['id']);
        if($result){
            $msg = "Deleted";
        }
        else{
            $msg = "Something went wrong";
        }
        echo $msg;
        // header("location:view_student.php?msg=$msg");
    }
    ?>