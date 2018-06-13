<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
<?php include'nav.php';
require_once '../config.php';  ?> 
  
<div class="container">
  <h2>Add teacher</h2>
  <form action="addf.php" method="post">
    <div class="form-group">
      <label  >Name:</label>
      <input type="text" class="form-control"   placeholder="Enter Name" name="name">
    </div>
     <div class="form-group">
      <label  >Contect:</label>
      <input type="number" class="form-control"   placeholder="Enter Comtect" name="con">
    </div>
    <div class="form-group">
      <label >Address:</label>
      <input type="text" class="form-control"   placeholder="Enter Address" name="add">
    </div>
    <div class="form-group">
      <label  >Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>

    <button type="reset" class="btn btn-default">Reset</button>
    <button type="submit" class="btn btn-default" name="bt">Submit</button>
  </form>
</div>


</body>
</html>


