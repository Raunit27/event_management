<?php

class fun
{
    private $db;
    function __construct($con)
    {
        $this->db = $con;

    }
    public function get_user($uname){
        $sql = "SELECT * FROM `manager_details` where `username` = '$uname'";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

    public function get_user_name_client($uname){
        $sql = "SELECT * FROM `client_details` where `username` = '$uname'";
        $fetch = mysqli_query($this->db, $sql);
        return $fetch;
    }

   public function insert_manager($name,$email, $number, $dob, $address, $doj,$image, $username, $password){

    $query="INSERT INTO `manager_details`(`name`, `email`, `number`, `dob`,`address`,`doj`,`image`,`username`,`password`) VALUES ('".$name."','".$email."','".$number."','".$dob."','".$address."','".$doj."','".$image."','".$username."','".$password."')";
    $result = mysqli_query($this->db, $query);
    return $result;

   }
    

   public function insert_client($name, $email, $mobile_number, $dob, $address, $event, $description, $username, $password){
    $query="INSERT INTO `client_details` (`name`, `email`, `mobile_number`,`dob`, `address`, `event`, `description`, `username`, `password`)  VALUES ('".$name."', '".$email."', '".$mobile_number."',
    '".$dob."', '".$address."', '".$event."', '".$description."', '".$username."', '".$password."')"; 
     $result = mysqli_query($this->db, $query);
     return $result;        
   }


   public function insert_event($client_id,$client_name, $event, $startdate, $enddate, $guest_expected, $venue, $catering, $decoration, $photography, $music, $parlour){
       //get all clients data from the database
       $query="INSERT INTO `event_details`(`client_id`, `client_name`, `event`, `startdate`, `enddate`, `guest_expected`, `venue`, `catering`, `decoration`, `photography`, `music`, `parlour`) VALUES ('".$client_id."','".$client_name."','".$event."','".$startdate."','".$enddate."','".$guest_expected."','".$venue."','".$catering."','".$decoration."','".$photography."','".$music."','".$parlour."')"; 
       $result = mysqli_query($this->db, $query);
       return $result; 
   }

   public function insert_staff($name, $email, $mobile_number, $alternate_mobile_number, $category, $address, $date_of_joining){
    $query ="INSERT INTO `staff_details`(`name`, `email`, `mobile_number`, `alternate_mobile_number`, `category`, `address`, `date_of_joining`) VALUES ('".$name."', '".$email."', '".$mobile_number."', '".$alternate_mobile_number."', '".$category."', '".$address."', '".$date_of_joining."')";
    $result = mysqli_query($this->db, $query);
    return $result;
}

public function insert_project($client_id,$client_name, $event, $manager_name,$manager_id, $total_cost, $total_expense){

    $query ="INSERT INTO `project_details`(`client`,`client_id`, `event`, `manager`,`manager_id`, `total_cost`, `total_expense`) VALUES ('".$client_name."','".$client_id."', '".$event."', '".$manager_name."','".$manager_id."', '".$total_cost."', '".$total_expense."')";
    $result = mysqli_query($this->db, $query);
    return $result;
}

public function insert_venue($venue_name,$address,$capacity,$manager_name, $mobile_number, $alternate_mobile_number,$email){

    $query="INSERT INTO `venue_details`(`venue_name`, `address`, `capacity`, `manager_name`, `mobile_number`, `alternate_mobile_number`, `email`) VALUES ('".$venue_name."','".$address."','".$capacity."','".$manager_name."','".$mobile_number."','".$alternate_mobile_number."','".$email."')";
    $result = mysqli_query($this->db, $query);
    return $result;
}

     public function  view_client(){

    $query ="SELECT * FROM `client_details` ";
       
        $result = mysqli_query($this->db, $query);
              return $result;
    }

    public function  edit_client($id){

        $query ="SELECT * FROM `client_details` WHERE id = '$id'";
           
            $result = mysqli_query($this->db, $query);
                  return $result;
        }

    public function  view_manager(){

        $query ="SELECT * FROM `manager_details` ";
           
            $result = mysqli_query($this->db, $query);
                  return $result;
        }
    
        public function edit_manager($id){

            $query ="SELECT * FROM `manager_details` WHERE id = '$id'";
               
                $result = mysqli_query($this->db, $query);
                      return $result;
        }    

     public function  view_venue(){
        
        $query ="SELECT * FROM `venue_details` ";
           
            $result = mysqli_query($this->db, $query);
                  return $result;
     } 
     public function edit_venue($id){

        $query ="SELECT * FROM `venue_details` WHERE id = '$id'";
           
            $result = mysqli_query($this->db, $query);
                  return $result;
    }  

    

        public function   view_event(){

            $query ="SELECT * FROM `event_details` ";
               
                $result = mysqli_query($this->db, $query);
                      return $result;
            } 

         public function edit_event($id){

            $query ="SELECT * FROM `event_details` WHERE id = '$id'";
               
                $result = mysqli_query($this->db, $query);
                      return $result;
         }   

        public function   view_staff(){

                $query ="SELECT * FROM `staff_details` ";
                   
                    $result = mysqli_query($this->db, $query);
                          return $result;
                } 

        public function edit_staff($id){

            $query ="SELECT * FROM `staff_details` WHERE id = '$id'";
               
                $result = mysqli_query($this->db, $query);
                      return $result;
        }        

        public function view_project(){

            $query ="SELECT * FROM `project_details` ";
               
                $result = mysqli_query($this->db, $query);
                      return $result;
        }      

        public function view_current_project(){

            $query ="SELECT * FROM `project_details`where `status` = '0' ";
               
                $result = mysqli_query($this->db, $query);
                      return $result;
        } 

        public function update_Project_status($id){
            $query="UPDATE `project_details` SET `status`='0' WHERE `client_id`=$id";
            $update=mysqli_query($this->db, $query);
            if($update==true){
             header("location:view_completed_project.php");
           }else{
               echo "failure";
        }
    }
         
        public function view_completed_project(){
            $query ="SELECT * FROM `project_details`where `status` = '1' ";
                $result = mysqli_query($this->db, $query);
                      return $result;
        }
        public function edit_project($id){

            $query ="SELECT * FROM `project_details` WHERE id = '$id'";
               
                $result = mysqli_query($this->db, $query);
                      return $result;
        }
        
        public function deleteEvent($id){

            $query="DELETE FROM `event_details` WHERE id = $id";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function deleteManager($id){
            $query="DELETE FROM `manager_details` WHERE id = $id";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function deleteClient($id){
            $query="DELETE FROM `client_details` WHERE id = $id";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function deleteStaff($id){
            $query="DELETE FROM `staff_details` WHERE id = $id";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function deleteProject($id){
            $query="DELETE FROM `project_details` WHERE id = $id";
            $result = mysqli_query($this->db, $query);
            return $result;
        }
        
        public function deleteVenue($id){
            $query="DELETE FROM `venue_details` WHERE id = $id";
            $result = mysqli_query($this->db, $query); 
            return $result;
        }

        public function update_client ($id,$name, $email, $mobile_number, $dob, $address, $event, $description, $username, $password) {
            //check if the user already exists in the database
            
            $sql= "UPDATE client_details SET name='$name', email='$email', mobile_number='$mobile_number', dob='$dob', address='$address', event='$event', description='$description', username='$username', password='$password' WHERE id = $id";
            $result = mysqli_query($this->db, $sql);
            return $result;
        } 
             
        public function update_event($id,$client, $event, $startdate, $enddate, $guest_expected, $venue, $catering, $decoration, $photography, $music, $parlour){
            $sql="UPDATE `event_details` SET `client_name`='$client',`event`=' $event',`startdate`='$startdate',`enddate`='$enddate',`guest_expected`='$guest_expected',`venue`='$venue',`catering`='$catering',`decoration`='$decoration',`photography`='$photography',`music`='$music',`parlour`='$parlour' WHERE id = $id";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        public function update_manager($id,$name,$email, $number, $dob, $address, $doj,$image='', $username, $password){
            if($image!=""){
            $sql="UPDATE `manager_details` SET `name`='$name',`email`='$email',`number`='$number',`dob`='$dob',`address`='$address',`doj`='$dob',`image`='$image',`username`='$username',`password`=' $password' WHERE id=$id";
        }else{
            $sql="UPDATE `manager_details` SET `name`='$name',`email`='$email',`number`='$number',`dob`='$dob',`address`='$address',`doj`='$dob',`username`='$username',`password`=' $password' WHERE id=$id";
        }
            $result = mysqli_query($this->db, $sql);
            return $result;

        }

        public function update_staff($id,$name, $email, $mobile_number, $alternate_mobile_number, $category, $address, $date_of_joining){
            $sql="UPDATE `staff_details` SET `name`='$name',`email`='$email',`mobile_number`='$mobile_number',`alternate_mobile_number`='$alternate_mobile_number',`category`='$category',`address`='$address',`date_of_joining`='$date_of_joining' WHERE id=$id";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        public function update_venue($id,$venue_name,$address,$capacity,$manager_name, $mobile_number, $alternate_mobile_number,$email){
        $sql="UPDATE `venue_details` SET `venue_name`='$venue_name',`address`='$address',`capacity`='$capacity',`manager_name`='$manager_name',`mobile_number`='$mobile_number',`alternate_mobile_number`='$alternate_mobile_number',`email`='$email' WHERE id=$id";
        $result = mysqli_query($this->db, $sql);
        return $result;
            
        }

        public function update_project($id,$client, $event, $manager, $total_cost, $total_expense){
            $sql="UPDATE `project_details` SET `client`='$client',`event`=' $event',`manager`='$manager',`total_cost`='$total_cost',`total_expense`=' $total_expense' WHERE id = $id";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        public function update_owner($id,$name, $title, $company_name, $email, $phone, $website,$image='',$fblink,$instalink,$twitterlink,$username, $password){
            if($image!=""){
                $sql="UPDATE `owner_profile` SET `name`='$name',`title`='$title',`company_name`='$company_name',`email`='$email',`phone`='$phone',`website`=' $website',`image`='$image',`fblink`='$fblink',`instalink`='$instalink',`twitterlink`='$twitterlink',`username`='$username',`password`='$password' WHERE id = $id";

            }
           else{
            $sql="UPDATE `owner_profile` SET `name`='$name',`title`=' $title',`company_name`='$company_name',`email`='$email',`phone`=' $phone',`website`=' $website',`fblink`='$fblink',`instalink`='$instalink',`twitterlink`='$twitterlink',`username`=' $username',`password`=' $password' WHERE id = $id";
           }
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        public function view_owner($id){
            $query="SELECT * FROM `owner_profile` WHERE id = $id";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function view_client_event(){
            $query="SELECT * FROM `client_details` WHERE `id` NOT IN (SELECT client_id FROM `event_details`)";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function view_client_project(){
            $query="SELECT * FROM `event_details` WHERE `client_id` NOT IN (SELECT client_id FROM `project_details`)";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function  insert_event_category($event_category,$minimum_guest){
            $sql="INSERT INTO `event_category`(`event_category`, `minimum_guest`) VALUES ('$event_category','$minimum_guest')";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
    
        public function view_event_category(){
            $query="SELECT * FROM `event_category`";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function delete_event_category($id){
            $sql="DELETE FROM `event_category` WHERE id = $id";
            $result=mysqli_query($this->db, $sql);
            return $result;
        }
 
        public function insert_client_payment($client_id, $client_name, $event,$date ,$amount){
            $sql="INSERT INTO `client_payment_details`(`client_id`, `client_name`, `event`,`date`, `amount`) VALUES ('$client_id','$client_name','$event','$date','$amount')";
            
            //$date = date('Y-m-d');
            $result = mysqli_query($this->db, $sql); 
            return $result;
        }

        public function view_client_payment(){
            $query="SELECT * FROM `client_payment_details` ORDER BY id DESC";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        // public function view_total_payment($client_id){
        //     $query="SELECT total_cost  FROM `project_details` where `client_id` = $client_id";
        //     $result = mysqli_query($this->db, $query);
        //     return $result;
        // }

        public function insert_manager_payment($manager_id,$manager_name,$date,$amount){
            $sql="INSERT INTO `manager_payment_details`(`manager_id`, `manager_name`, `date`, `amount`) VALUES ('$manager_id','$manager_name','$date','$amount')";
            $result = mysqli_query($this->db, $sql); 
            return $result;
        }

        public function view_manager_payment(){
            $query="SELECT * FROM `manager_payment_details` ORDER BY id DESC";
            $result = mysqli_query($this->db, $query);
            return $result;
        }

        public function insert_staff_payment($staff_id, $staff_name,$date ,$amount){
            $sql="INSERT INTO `staff_payment_details`(`staff_id`, `staff_name`,`date`, `amount`) VALUES ('$staff_id','$staff_name','$date','$amount')";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
        
        public function view_staff_payment(){
            $query="SELECT * FROM `staff_payment_details` ORDER BY id DESC";
            $result = mysqli_query($this->db, $query);
            return $result;
        }


        public function login($username,$password){
        
            $query    = "SELECT * FROM `owner_profile` WHERE `username`='$username' AND `password` = '".$password."';";
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

        public function view_intrested_client(){
            $sql="SELECT * FROM `update_client` ORDER BY id DESC";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        public function delete_intrested_client($id){
            $sql="DELETE FROM `update_client` WHERE id = $id";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
}

    
?>


