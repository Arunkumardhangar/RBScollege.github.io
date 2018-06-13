<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
<?php include'nav.php';
require_once '../config.php'; 
if(isset($_POST['bt']))
{   $note=$_POST['note'];
     $q = "insert into note(note)values('$note')";
     $res=mysqli_query($link,$q);
     if($res)
     {
       echo'Notofication inserted successfully';
     }
      else
      	{    
           
      		echo'<h2>Problem in record insertion...</h2>';
         }
 } 
 function redirect($url)
{
    header('Location: '.$url);
    exit();
}

redirect('http://localhost/RBSMTC/Admin/notification.php');                
?>

</body>
</html>