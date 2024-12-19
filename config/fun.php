<?php

class fun
{
    private $db;
    function __construct($con)
    {
        $this->db = $con;

    }

   public function update_gmail($email){

        $query="INSERT INTO `update_gmail`(`gmail`) VALUES ('".$email."')";
        $result = mysqli_query($this->db, $query);
        return $result;
        
   }

     public function  update_client($name,$email, $number, $subject){

        $query="INSERT INTO `update_client`(`name`, `email`, `number`, `subject`) VALUES ('".$name."','".$email."','".$number."','".$subject."')";
        $result = mysqli_query($this->db, $query);
        return $result;
     }


     public function login($username,$password){
        
        $query    = "SELECT * FROM `client_details` WHERE `username`='$username' AND `password` = '".$password."';";
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


    public function view_client_details($uname){
        $sql= "SELECT * FROM client_details WHERE username = '$uname'";
        $res =mysqli_query($this->db,$sql);
        return $res;
    }
    public function event_details($id){
        $sql= "SELECT * FROM event_details WHERE client_id = '$id'";
        $res =mysqli_query($this->db,$sql);
        return $res;
    }

    public function view_project($id){
        $sql= "SELECT * FROM project_details WHERE client_id = '$id'";
        $res =mysqli_query($this->db,$sql);
        return $res;
    }
    public function view_client_payment($id){
        $query="SELECT * FROM `client_payment_details` WHERE client_id = '$id' ORDER BY id DESC";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function manager_details($id){
        $sql= "SELECT * FROM manager_details WHERE id = '$id'";
        $res =mysqli_query($this->db,$sql);
        return $res;
    }
    public function owner_details(){
        $sql= "SELECT * FROM owner_profile";
        $res =mysqli_query($this->db,$sql);
        return $res;
    }
     public function view_notification($id){
        $sql= "SELECT * FROM details_to_client WHERE client_id = '$id'";
        $res =mysqli_query($this->db,$sql);
        return $res;
     }

}    
?>