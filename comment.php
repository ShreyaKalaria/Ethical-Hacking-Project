<?php

include("auth_session.php");
include("db.php");
$username =$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Post</title>
    
    <style>
    body{
    background: url('https://cdn.pixabay.com/photo/2015/04/20/13/22/clouds-731260_960_720.jpg');
  
 

</style>
<body>
    
   </head>
    <div class ="msgbox">
    <form method="post">
            <textarea rows="20" cols="150" name="status" placeholder="comments"></textarea>
            <input type="submit" name="submit" value="submit">
            
    </form>
  </div>
  <?php
          if (isset($_POST['submit']))
          {
             $comment=$_POST['status'];
             if ($msgs != "NULL") {
              $sql="insert into comments(username,comment)values('$username','$comment')";
              $q=mysqli_query($con,$sql);
              }}
              
   ?>
   <div class = "status">
          <?php
          $command = "SELECT * FROM comments WHERE username = '$username'" ;
          $result = $con->query($command);
          
    if (mysqli_num_rows($result) > 0) {
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    
    ?>
    <div class= "area">
     <?php
     
     $name=$row['username'];
     $comment=$row['comment'];
     echo ''.$name.'';
     
     echo ''.$comment.'';
     
     ?>
     <?php
     $i++;
     }
     }
     ?></div>
        </div>                           
</body>
</html>
