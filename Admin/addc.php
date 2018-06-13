<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<?php 
require_once '../config.php';  
if(isset($_POST['bt']))
{   $name=$_POST['name'];
    $time=$_POST['time']; 
     $fee=$_POST['fee']; 
     $q = "insert into fee (Course,Year,fee)values('$name',$time,'$fee')";
     
     $res=mysqli_query($link,$q);
     if($res)
     {
       echo'inserted successfully';
     }
      else
        {    
           
          echo'<h2>Problem in record insertion...</h2>';
         }
 }                  
?>


