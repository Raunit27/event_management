<?php
include('config/db.php'); 
$conn=new connect();
// Fetching event data
$event_id=!empty($_POST['event_id'])?$_POST['event_id']:'';
if(!empty($event_id))
  {
    $client_data = explode('|', $event_id);
    $client_id = $client_data[0];
  $query="SELECT id, event from client_details WHERE id='$client_id'";
 $result=mysqli_query($conn->dbconnect(),$query);
        
  if(mysqli_num_rows($result)>0)
  {
     
     while($arr= $result->fetch_assoc())
     {
        echo "<option value='".$arr['event']."'>".$arr['event']."</option><br>";  
      }
   }   
 }

 // Fetching event data for project section 
 $event_id1=!empty($_POST['event_id1'])?$_POST['event_id1']:'';
 if(!empty($event_id1))
  {
    $client_data = explode('|', $event_id1);
    $client_id = $client_data[0];
  $query="SELECT id, event from event_details WHERE client_id='$client_id'";
 $result=mysqli_query($conn->dbconnect(),$query);
        
  if(mysqli_num_rows($result)>0)
  {
     
     while($arr= $result->fetch_assoc())
     {
        echo "<option value='".$arr['event']."'>".$arr['event']."</option><br>";  
      }
   }   
 }
 ?>