<?php 
    session_start();
    include "config/db.php";
    include "config/fun.php";
    $connect=new connect();
    $fun=new fun($connect->dbconnect());
    $msg="";

    if(isset($_POST["mana_submit"]))
    {    
        $name=trim($_POST['name']);
         $email=trim($_POST['email']);
         $number=$_POST['m_nuber'];
         $dob=$_POST['dob'];
         $address=$_POST['address'];
         $doj=$_POST['doj'];
         
         $username=trim($_POST['username']);
         $password=trim($_POST['password']);
         $re_password=trim($_POST['re_password']);
         $find_user = $fun->get_user($username);
         if(mysqli_num_rows($find_user) > 0){
             $msg = "Username already exist";
             header("Location: add_mana.php?msg=$msg");
         }
         if(empty($name) || empty($email) || empty($number) || empty($dob) || empty($address) || empty($doj) || empty($username) || empty($password) || empty($re_password)){
             $msg = "All fields are required";
             header("Location: add_mana.php?msg=$msg");
         }
         if($password == $re_password){
            if(isset($_FILES["image"]["name"])&& !empty($_FILES["image"]["name"])){

               $fileName = $name.time();
               $target_dir = "./images/managers_images/";
               $target_file = $target_dir .basename($_FILES["image"]["name"]);
               $uploadOk = 1;
               $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
               $file_name = $target_dir ."$fileName.".$imageFileType;
                $newfilename=$fileName.".".$imageFileType;
               if(move_uploaded_file($_FILES["image"]["tmp_name"], $file_name)){
                   $image=$newfilename;
      
               $result = $fun->insert_manager($name,$email, $number, $dob, $address, $doj , $image, $username, $password);
               if ($result) {
                
                  header('Location:  add_mana.php');
               }
               else{
                   echo "error";
               }
             }else{
                 echo "error";
             }
         }
         //images
        
         }
         else{
                  header('Location:  add_mana.php?msg=Password Not Match');
         }
    }

    if(isset($_POST["client_submit"]))
     {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile_number = $_POST['m_nuber'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $event = $_POST['event'];
        $description = $_POST['discription'];
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        $find_user = $fun->get_user_name_client($username);
        
        
        if(mysqli_num_rows($find_user) > 0){
            $msg = "Username already exist";
            header("Location: add_client.php?msg=$msg");
        }
        else{

        if(empty($name) || empty($email) || empty($mobile_number) || empty($dob) || empty($address) || empty($event) || empty($description) || empty($username) || empty($password)){
         $msg = "All fields are required";
         echo $msg;
         header("Location:add_client.php?msg=$msg");
     }
     else{
          $result = $fun->insert_client($name, $email, $mobile_number, $dob, $address, $event, $description, $username, $password);
         
        
         if ($result) {
            header('Location: add_client.php');
         }
      }
    }
   }

    if(isset($_POST["event_submit"])) {
      
      $client_data = explode('|', $_POST['Client']);
      $client_id = $client_data[0];
      $client_name = $client_data[1];
      $event = $_POST['event'];
      $startdate = $_POST['startdate'];
      $enddate = $_POST['enddate'];
      $guest_expected = $_POST['G_number'];
      $venue = $_POST['venue'];
      $catering = $_POST['Catering'];
      $decoration = $_POST['decoration'];
      $photography = $_POST['photo'];
      $music = $_POST['music'];
      $parlour = $_POST['parlour'];

      if(empty($event) || empty($startdate) || empty($enddate) || empty($guest_expected) || empty($venue) || empty($catering) || empty($decoration) || empty($photography) || empty($music) || empty($parlour)){
         $msg = "All fields are required";
         header("Location:add_event.php?msg=$msg");
      } 
      else{
      $result = $fun->insert_event($client_id,$client_name, $event, $startdate, $enddate, $guest_expected, $venue, $catering, $decoration, $photography, $music, $parlour);
      if ($result) {
           
         header('Location: add_event.php');
      } else{
         echo"error";
      }
   }
   }
   
  
   if(isset($_POST["staff_submit"])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile_number = $_POST['m_nuber'];
      $alternate_mobile_number = $_POST['m_nuber_1'];
      $category = $_POST['Client'];
      $address = $_POST['address'];
      $date_of_joining = $_POST['doj'];

      if(empty($name) || empty($email) || empty($mobile_number) || empty($alternate_mobile_number) || empty($category) || empty($address) || empty($date_of_joining)){
         $msg = "All fields are required";
         header("Location:add_staff.php?msg=$msg");
      }
      else{
      $result = $fun->insert_staff($name, $email, $mobile_number, $alternate_mobile_number, $category, $address, $date_of_joining);
      if ($result) {

         header('Location: add_staff.php');
      }else{
         echo"error";
      }
   }
   }

   if(isset($_POST["project_submit"])) {
      $client_data = explode('|', $_POST['client']);
      $client_id = $client_data[0];
      $client_name = $client_data[1];
      $event = $_POST['event'];
      $manager_data = explode('|', $_POST['manager']);
      $manager_id = $manager_data[0];
      $manager_name = $manager_data[1];
      $total_cost = $_POST['cost'];
      $total_expense = $_POST['expense'];
      if(empty($client_id) || empty($client_name) || empty($event) || empty($manager_id) || empty($manager_name) || empty($total_cost) || empty($total_expense)){
         $msg = "All fields are required";
         header("Location:add_project.php?msg=$msg");
      }
      else{
      $result = $fun->insert_project($client_id, $client_name, $event, $manager_name,$manager_id, $total_cost, $total_expense);
      if ($result) {
         header('Location: add_project.php');
      }else{
         echo"error";
      }
   }
   }

   if(isset($_POST["client_update"]))
     {
        $id=$_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile_number = $_POST['m_nuber'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $event = $_POST['event'];
        $description = $_POST['discription'];
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
       
        
        if(empty($name) || empty($email) || empty($mobile_number) || empty($dob) || empty($address) || empty($event) || empty($description) || empty($username) || empty($password)){
           $msg = "All fields are required";
           header("Location:edit_client.php?client&id=$id&msg=$msg");
        }
         else{
         $result = $fun->update_client($id,$name, $email, $mobile_number, $dob, $address, $event, $description, $username, $password);
         if ($result) {
           
          
            // PHP program to pop an alert 
            // message box on the screen 
              
            // Display the alert box  
           // echo '<script>alert("Updated successfully")</script>'; 
            echo "<script>alert('Updated successfully');document.location='view_client.php' </script>";
         } else {
            echo"error";
         }
      }
        
    }
   


    if(isset($_POST["update_event"]))
     {
      $id=$_POST['id'];
      $client = $_POST['Client'];
      $event = $_POST['event'];
      $startdate = $_POST['startdate'];
      $enddate = $_POST['enddate'];
      $guest_expected = $_POST['G_number'];
      $venue = $_POST['venue'];
      $catering = $_POST['Catering'];
      $decoration = $_POST['decoration'];
      $photography = $_POST['photo'];
      $music = $_POST['music'];
      $parlour = $_POST['parlour'];

      if(empty($event) || empty($startdate) || empty($enddate) || empty($guest_expected) || empty($venue) || empty($catering) || empty($decoration) || empty($photography) || empty($music) || empty($parlour)){
         $msg = "All fields are required";
         header("Location:edit_event.php?event&id=$id&msg=$msg");
      }
      else{
      $result = $fun->update_event($id,$client, $event, $startdate, $enddate, $guest_expected, $venue, $catering, $decoration, $photography, $music, $parlour);
         if ($result) {
           
          
            // PHP program to pop an alert 
            // message box on the screen 
              
            // Display the alert box  
           // echo '<script>alert("Updated successfully")</script>'; 
            echo "<script>alert('Updated successfully');document.location='view_event.php' </script>";
         } else {
            echo"error";
         }
      }
        
    }

    if(isset($_POST["update_manager"]))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
         $email=$_POST['email'];
         $number=$_POST['m_nuber'];
         $dob=$_POST['dob'];
         $address=$_POST['address'];
         $doj=$_POST['doj'];
         $username=$_POST['username'];
         $password=$_POST['password'];

         if(empty($name) || empty($email) || empty($number) || empty($dob) || empty($address) || empty($doj) || empty($username) || empty($password)){
            $msg = "All fields are required";
            header("Location:edit_mana.php?manager&id=$id&msg=$msg");
         }
         else{
 
         //images
        if(isset($_FILES["image"]["name"])&& !empty($_FILES["image"]["name"])){

         $fileName = $name."-".time();
         $target_dir = "./images/managers_images/";
         $target_file = $target_dir .basename($_FILES["image"]["name"]);
         $uploadOk = 1;
         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         $file_name = $target_dir ."$fileName.".$imageFileType;
          $newfilename=$fileName.".".$imageFileType;
         if(move_uploaded_file($_FILES["image"]["tmp_name"], $file_name)){
             $image=$newfilename;

         $result = $fun->update_manager($id,$name,$email, $number, $dob, $address, $doj,$image, $username, $password);
         if ($result) {
           
            echo "<script>alert('Updated successfully');document.location='view_manager.php' </script>";
         } else {
            echo"error";
         }
      }
      else{
          $msg= "Enter All Fields";
          echo "$msg";
          header("location:view_manager.php?msg=$msg");
       }
      }else{
          $result= $fun->update_manager($id,$name,$email, $number, $dob, $address, $doj,'', $username, $password);
          if ($result) {
             echo "<script>alert('Updated successfully');document.location='view_manager.php' </script>";
          } else {
             echo"error";
          }
   
 }
}
    }

    if(isset($_POST["staff_edit"])) {
      $id= $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile_number = $_POST['m_nuber'];
      $alternate_mobile_number = $_POST['m_nuber_1'];
      $category = $_POST['Client'];
      $address = $_POST['address'];
      $date_of_joining = $_POST['doj'];

      if(empty($name) || empty($email) || empty($mobile_number) || empty($category) || empty($address) || empty($date_of_joining)){
         $msg = "All fields are required"; 
         header("Location:edit_staff.php?staff&id=$id&msg=$msg");
      }

      $result = $fun->update_staff($id,$name, $email, $mobile_number, $alternate_mobile_number, $category, $address, $date_of_joining);
      if ($result) {
           
         echo "<script>alert('Updated successfully');document.location='view_staff.php' </script>";
      } else {
         echo"error";
      }
   }
   

   if(isset($_POST["project_edit"])) {
      $id= $_POST['id'];
      $client = $_POST['client'];
      $event = $_POST['event'];
      $manager = $_POST['manager'];
      $total_cost = $_POST['cost'];
      $total_expense = $_POST['expense'];

      if(empty($client) || empty($event) || empty($manager) || empty($total_cost) || empty($total_expense)){
         $msg = "All fields are required"; 
         header("Location:edit_project.php?project&id=$id&msg=$msg");
      }
      else{

      $result = $fun->update_project($id,$client, $event, $manager, $total_cost, $total_expense);
      if ($result) {
           
         echo "<script>alert('Updated successfully');document.location='view_project.php' </script>";
      } else {
         echo"error";
      }
   }
}
   if(isset($_POST["owner_edit_submit"])) {
      $id= $_POST['id'];
      $name = $_POST['name'];
      $title = $_POST['title'];
      $company_name = $_POST['company_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone']; 
      $website = $_POST['website'];
      $fblink= $_POST['fblink'];
      $instalink= $_POST['instalink'];
      $twitterlink= $_POST['twitterlink'];
      $username=trim($_POST['userid']);
      $password=trim($_POST['pass']);

     if(empty($name) || empty($title) || empty($company_name) || empty($email) || empty($phone) || empty($website) || empty($fblink) || empty($instalink) || empty($twitterlink)|| empty($username) || empty($password)){
        $msg = "All fields are required";
        header("Location:owner_edit_profile.php?id=$id&msg=$msg");
     }
     else{
        //images
        if(isset($_FILES["image"]["name"])&& !empty($_FILES["image"]["name"])){

        $fileName = "owner";
        $target_dir = "./images/owner_images/";
        $target_file = $target_dir .basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file_name = $target_dir ."$fileName.".$imageFileType;
         $newfilename=$fileName.".".$imageFileType;
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $file_name)){
         $result= $fun->update_owner($id,$name, $title, $company_name, $email, $phone, $website, $newfilename,$fblink,$instalink,$twitterlink,$username,$password);
         if ($result) {
            echo "<script>alert('Updated successfully');document.location='owner_profile.php' </script>";
         } else { 
            echo"error";
         }
        }
        else{
            $msg= "Enter All Fields";
            echo "$msg";
            header("location:owner_profile.php?msg=$msg");
         }
        }else{
            $result= $fun->update_owner($id,$name, $title, $company_name, $email, $phone, $website,"", $fblink,$instalink,$twitterlink,$username,$password);
            if ($result) {
               echo "<script>alert('Updated successfully');document.location='owner_profile.php' </script>";
            } else {
               echo"error";
            }
         }
   }
}
     
if(isset($_POST["venue_submit"])) {
   $venue_name = $_POST['venue_name'];
   $address = $_POST['address'];
   $capacity = $_POST['capacity'];
   $manager_name = $_POST['manager_name'];
   $mobile_number = $_POST['m_nuber'];
   $alternate_mobile_number = $_POST['m_nuber_1'];
   $email = $_POST['email'];

   if(empty($venue_name) || empty($address) || empty($capacity) || empty($manager_name) || empty($mobile_number) || empty($alternate_mobile_number) || empty($email)){
      $msg= "Enter All Fields";
      echo "$msg";
      header("location:add_venue.php?msg=$msg");
   }
   
   else {
   $result = $fun->insert_venue($venue_name,$address,$capacity,$manager_name, $mobile_number, $alternate_mobile_number,$email);
   if ($result) {

      header('Location: add_venue.php');
   }else{
      echo"error";
   }
}
}

if(isset($_POST["venue_edit"])) {
   $id= $_POST['id'];
   $venue_name = $_POST['venue_name'];
   $address = $_POST['address']; 
   $capacity = $_POST['capacity'];
   $manager_name = $_POST['manager_name'];
   $mobile_number = $_POST['m_nuber'];
   $alternate_mobile_number = $_POST['m_nuber_1'];
   $email = $_POST['email'];

   if(empty($venue_name) || empty($address) || empty($capacity) || empty($manager_name) || empty($mobile_number) || empty($alternate_mobile_number) || empty($email)){
      $msg= "Enter All Fields";
      echo "$msg";
      header("location:add_venue.php?id=$id&msg=$msg");
   }
   else{
   $result = $fun->update_venue($id,$venue_name,$address,$capacity,$manager_name, $mobile_number, $alternate_mobile_number,$email);
      if ($result) {
         echo "<script>alert('Updated successfully');document.location='view_venue.php'</script>";
      } else {
         echo"error"; 
      }
   }
}
      if(isset($_POST["event_category_submit"])){
         $event_category = $_POST['category_name'];
         $minimum_guest= $_POST['minimum_guest'];
         if(empty($event_category) || empty($minimum_guest)){
            $msg= "Enter All Fields";
            echo "$msg";
            header("location:add_event_category.php?msg=$msg");
         }
         else{
         $result= $fun->insert_event_category($event_category,$minimum_guest);
         if ($result) {

            header('Location: add_event_category.php');
         }else{
            echo"error";
         }
      }
      }

      if(isset($_POST['client_pay'])){
         // echo "string";
         
         $name= explode('|', $_POST['Client']); 
         $client_id=$name[0];
         $client_name=$name[1];
         $event=$_POST['event']; 
         $date=$_POST['date'];
         $amount=$_POST['amount'];

         if(empty($client_id) || empty($client_name) || empty($event) || empty($date) || empty($amount)){
            $msg= "Enter All Fields";
            echo "$msg";
            header("location:client_payment.php?msg=$msg");
         }
         else{
 
         $result = $fun->insert_client_payment($client_id, $client_name, $event,$date, $amount);
         if ($result) {
             $msg = "<div class='alert alert-success' role='alert'>Payment added successfully</div>";
             header("location:client_payment.php?msg=$msg");
             
         }else{
             $msg = "<div class='alert alert-danger' role='alert'>Payment not added</div>";
         }
     
     }
   }


     if(isset($_POST['manager_pay'])){
      // echo "string";
      
      $name= explode('|', $_POST['manager']); 
      $manager_id=$name[0];
      $manager_name=$name[1];
      $date=$_POST['date'];
      $amount=$_POST['amount'];

      if(empty($manager_id) || empty($manager_name) || empty($date) || empty($amount)){
         $msg= "Enter All Fields";
         echo "$msg";
            header("location:manager_payment_details.php?msg=$msg");
         }
         else{
      $result = $fun->insert_manager_payment($manager_id,$manager_name,$date,$amount);
      if ($result) {
          $msg = "<div class='alert alert-success' role='alert'>Payment added successfully</div>";
          header("location:manager_payment_details.php?msg=$msg");
          
      }else{
          $msg = "<div class='alert alert-danger' role='alert'>Payment not added</div>";
      }
  
  }
}

     if(isset($_POST['staff_pay'])){
      // echo "string";
      
      $name= explode('|', $_POST['staff']); 
      $staff_id=$name[0];
      $staff_name=$name[1];
      $date=$_POST['date'];
      $amount=$_POST['amount'];

      if (empty($staff_id) || empty($staff_name) || empty($date) || empty($amount)) {
         $msg= "Enter All Fields";
         echo "$msg";
            header("location:staff_payment_details.php?msg=$msg");
         }
         else{
      $result = $fun->insert_staff_payment($staff_id,$staff_name,$date,$amount);
      if ($result) {
          $msg = "<div class='alert alert-success' role='alert'>Payment added successfully</div>";
          header("location:staff_payment_details.php?msg=$msg");
      }
      else{
          $msg = "<div class='alert alert-danger' role='alert'>Payment not added</div>";
      }
      }
         }
      
    ?>