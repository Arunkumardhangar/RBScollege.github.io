<!DOCTYPE html>
<html lang="en">
<body>
    <form action="ff.php" method="get" enctype="multipart/form-data">
         image id:
        <input type="text" name="id"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>

<?php
include'nav.php';
require_once '../config.php'; 
 
if(!empty($_GET['id'])){
     
    
    //Get image data from database
    $result = $link->query("SELECT image FROM images WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
}
?>