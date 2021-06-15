<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <style>
    body{
    background: url('https://cdn.pixabay.com/photo/2015/04/20/13/22/clouds-731260_960_720.jpg');
  
 

</style>
</head>
<body>
<?php
    require('db.php');
    
    if (isset($_REQUEST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);
       
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '$password', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <br><br>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <br><br>
        <input type="password" class="login-input" name="password" placeholder="Password">
        <br><br>
        <input type="password" class="login-input" name="password" placeholder="confirm Password">
        <br><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already user? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
