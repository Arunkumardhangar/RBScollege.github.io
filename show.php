<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8"><title>Rbsmtc college (agra)</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link href="index.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="[favicon.ico](http://www.sitepoint.com/forums/view-source:http://www.pmob.co.uk/favicon.ico)" type="image/x-icon" /
 </head>
 <body>
 
<?php include'nav.php';
require_once 'config.php'; 
 ?>  
<div class="container">
 
<?php
 $q="select * from faculty";
$res=mysqli_query($link,$q);
if(mysqli_num_rows($res)>0)
{
?>
<div class="table-responsive">
<table border="1" class="table">
<thead>
<tr>
<th>Teacher_name</th> 
<th>Contact no.</th>
<th>Address</th>
<th>Email</th> 
</tr>
</thead>
<?php
while($row = mysqli_fetch_assoc($res))
{
$name=$row['fac_name'];
$con=$row['contact']; 
$add=$row['address']; 
$Email=$row['email'];
?>
<tr>
<td><?php echo $name;?></td>
<td><?php echo $con;?></td>  
<td><?php echo $add;?></td> 
<td><?php echo $Email;?></td> 
</tr>

<?php
}

?>
</table>
</div>
<?php
}
else
{
	echo"<h2>Given Record is not available</h2>";
}
?>
</div>
</body>
</html>

<?php include'footer.php' ?>
