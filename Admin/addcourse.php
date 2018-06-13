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
  <h2>Add Course</h2>
  <form action="addc.php" method="post">
    <div class="form-group">
      <label>Course Name:</label>
      <input type="text" class="form-control"   placeholder="Enter Course Name" name="name">
    </div>
     <div class="form-group">
      <label  >Course Time:</label>
      <input type="number" class="form-control"   placeholder="Enter time duration in number of year" name="time">
    </div>
    <div class="form-group">
      <label >Course Fee:</label>
      <input type="text" class="form-control"   placeholder="Enter fee per semester" name="fee">
    </div>
     

    <button type="reset" class="btn btn-default">Reset</button>
    <button type="submit" class="btn btn-default" name="bt">Submit</button>
  </form>
</div>


</body>
</html>



