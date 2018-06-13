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
<?php include'nav.php'; ?>
    <h2>Hi, <?php echo $_SESSION['username']; ?>. Welcome to our site.</h2>
    <p><a href="logout.php">Sign Out of Your Account</a></p>
    
</body>
</html>