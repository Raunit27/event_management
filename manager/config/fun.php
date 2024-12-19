<?php

class fun
{
    private $db;
    function __construct($con)
    {
        $this->db = $con;

    }

    public function login($username,$password){
        
        $query    = "SELECT * FROM `manager_details` WHERE `username`='$username' AND `password` = '".$password."';";
        $result = mysqli_query($this->db, $query);
        $rows = mysqli_num_rows($result);
        
        if ($rows == 1) {
            $fetch = mysqli_fetch_assoc($result);
                 return $fetch;
             // Redirect to user dashboard page 
         }
         else{
             //print_r($rows);
             return null;
         }
    }

    public function view_manager_nav($uname){
        $query="SELECT * FROM `manager_details` WHERE `username`='$uname'";
        $result = mysqli_query($this->db, $query);
        return $result;

    } 

    public function view_manager_client($id){
        $query="SELECT * FROM `project_details` WHERE `manager_id`=$id";
        $result=mysqli_query($this->db, $query);
        return $result; 
    }
    
    public function view_start_date($client_id){
        $query="SELECT * FROM `event_details` WHERE `client_id`=$client_id";
        $result=mysqli_query($this->db, $query);
        return $result;
    }
    public function get_event_details($client_id){
        $query="SELECT * FROM `event_details` WHERE `id`=$client_id";
        $result=mysqli_query($this->db, $query);
        return $result;
    }

    public function view_client_details($client_id){
        $query="SELECT * FROM `client_details` WHERE `id`='$client_id'";
        $result=mysqli_query($this->db, $query);
        return $result;
    }

    public function update_Project_status($id){
        $query="UPDATE `project_details` SET `status`='1' WHERE `client_id`=$id";
        $update=mysqli_query($this->db, $query);
        if($update==true){
         header("location:welcome.php");
       }else{
           echo "failure";
    }
}    

public function   view_staff(){

    $query ="SELECT * FROM `staff_details` ";
       
        $result = mysqli_query($this->db, $query);
              return $result;
    }

    public function book_staff($id){

        $query ="SELECT * FROM `staff_details` WHERE id = '$id'";
           
            $result = mysqli_query($this->db, $query);
                  return $result;
    }    

    public function insert_book_staff($name, $category, $address,$date_of_booking,$manager_id,$staff_id,$number,$time){
        
        $query="INSERT INTO `manager_book_staff`(`name`, `category`, `address`, `date_of_booking`, `manager_id`, `staff_id`, `number`, `time`) VALUES ('$name','$category','$address','$date_of_booking','$manager_id','$staff_id','$number','$time')";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function insert_checklist($client,$event,$check,$client_id){
        $query="INSERT INTO `checklist_details`(`client`, `event`, `check_d`, `client_id`) VALUES ('$client','$event','$check','$client_id')";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function update_checklist($client,$event,$check,$client_id){
        $query="UPDATE `checklist_details` SET `check_d` = '$check' WHERE `client` = '$client' AND `event` = '$event' AND `client_id` = '$client_id'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function checklist_view($id){
        $query="SELECT * FROM `checklist_details` WHERE `client_id`=$id";
        //echo $query;die();
        $res=mysqli_query($this->db, $query);   
        return $res;
    }

    public function view_book_staff($id){
        $query="SELECT * FROM `manager_book_staff` WHERE `manager_id`=$id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function delete_book_staff($id){
        $query="DELETE FROM `manager_book_staff` WHERE `id`=$id";
        $result = mysqli_query($this->db, $query);
        if($result){    
        header('Location: view_book_staff.php');
    }
    }


    public function insert_personal_note($note,$manager_id){
        $query="INSERT INTO `personal_note`(`note`, `manager_id`) VALUES ('$note','$manager_id')";
        $result = mysqli_query($this->db, $query);  
        
       return $result;
}

    public function update_personal_note($note,$manager_id){
        $query="UPDATE `personal_note` SET `note` = '$note' WHERE `manager_id` = '$manager_id'"; 
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function view_personal_note($id){
        $query="SELECT * FROM `personal_note` WHERE `manager_id`=$id";
        $result = mysqli_query($this->db, $query);
        return $result;
    } 


    public function insert_details_to_client($client_id,$client_name,$image1,$image2,$image3,$discription,$manager_id){
        $query="INSERT INTO `details_to_client`(`client_id`, `client`, `image1`, `image2`, `image3`, `description`, `manager_id`) VALUES ('$client_id','$client_name','$image1','$image2','$image3','$discription','$manager_id')";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function update_details_to_client($client_id,$client_name,$image1,$image2,$image3,$discription,$manager_id){
        $query= "UPDATE `details_to_client` SET `client` = '$client_name', `image1` = '$image1', `image2` = '$image2', `image3` = '$image3', `description` = '$discription', `manager_id` = '$manager_id' WHERE `client_id` = '$client_id'";
        
    }

    public function provided_details_to_client($id){
        $query="SELECT * FROM `details_to_client` WHERE `manager_id`=$id";
        $results = mysqli_query($this->db, $query);
        return $results;
    }

    public function delete_client_details($delete_id){
        $query="DELETE FROM `details_to_client` WHERE `id`=$delete_id";
        $result = mysqli_query($this->db, $query);
        if(!$result) {
            die("Query Failed.");
        }
        else{
            header('Location: provided_details.php');
        }
    }
    public function fetch_details_to_client($id){
        $query="SELECT * FROM `details_to_client` WHERE `id`=$id";
        $results = mysqli_query($this->db, $query);
        return $results;
    }

}


?>