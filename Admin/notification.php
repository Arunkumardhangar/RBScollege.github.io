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
<form action="node.php" method="post">
    <div class="form-group">
      <label for="comment">Notofication:</label>
      <textarea class="form-control" rows="20" id="comment" name="note" required></textarea></br>
  <button type="submit" class="btn btn-primary" name="bt">Submit</button>
    </div>
  </form>
</div>
</body>
</html>
