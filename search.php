<?php
    $con= new mysqli("localhost","anjalii","anjalii123","LoginSystem");
   
    if(isset($_GET['submit'])){
        $name =  $_GET['search'];
        
$result = mysqli_query($con, "SELECT * FROM `users` WHERE username = '$name'");

while ($row = mysqli_fetch_array($result))
{
        echo $row['username'];
        echo "<br>";
}
    }
    mysqli_close($con);
    ?>
