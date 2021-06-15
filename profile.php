<?php
 
    session_start();
    $user_id=$_SESSION['user_id'];
    $query=mysqli_query($conn,"SELECT * FROM users where user_id='$user_id'");
    $row=mysqli_fetch_array($query);
      require('db.php')
?>

<?php
$conn = mysqli_connect("localhost","anjalii","anjalii123","LoginSystem");



if(isset($_POST['update'])) {
    $username = $_POST['username'];

    $query = "UPDATE `users` SET username='$_POST[username]', email='$_POST[email]' WHERE id='$id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run) {
        echo '<script type="text/javascript"> alert("Data changed") </script>';
        header('location: home.php');

    }
    else {
        echo '<script type="text/javascript"> alert("no data") </script>';
        
    }

}
  

?>

<html>
<head>
<title>Profile</title>

<style>
   body {
    background-image: url('https://cdn.pixabay.com/photo/2015/04/20/13/22/clouds-731260_960_720.jpg');
 
}

</style>
</head>
<body>

<div class="loginbox">

    <h2>Update Your Profile</h2>
    <form action="" method="POST">
        
        <input type="text" name="username" class="input-box" placeholder="Username" value="<?php echo $row['username'] ?>"/>
        <br><br>
        <input type="text" name="email" class="input-box" placeholder="Email" value="<?php echo $row['email'] ?>"/>
        <br><br>
        <input type="submit" name="update" value="Update"/><br>
    </form>
</div>
 </body>
</html> 




