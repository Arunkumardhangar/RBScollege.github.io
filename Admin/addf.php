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
    $con=$_POST['con']; 
     $add=$_POST['add'];
    $email=$_POST['email']; 
     $q = "insert into faculty (fac_name,contact,address,email)values('$name',$con,'$add','$email')";
     $res=mysqli_query($link,$q);
     if($res)
     {
       echo"<h2>Record inserted..</h2>";
     }
      else
      	{    
           
      		echo'<h2>Problem in record insertion...</h2>';
         }
 }                  
?>
