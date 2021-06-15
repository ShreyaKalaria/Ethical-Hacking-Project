<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    
    <style>
    body {
   
  background: url('https://cdn.pixabay.com/photo/2015/04/20/13/22/clouds-731260_960_720.jpg');

.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: green;
}
h1.login-title {
    color: #777777;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#24c210;
    outline: none;
}
.login-button {
    color: #ff0000;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}

.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}
span{  
        color: white;  
        font-size: 17px;  
    }  
    a{  
        float: right;  
        background-color: grey;  
    }  
</style>
</head>
<body>
<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
      
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . ($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            
            header("Location: home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <br><br>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <br><br>
        <p><span><input type="checkbox" name="remember" value="1" ></span>Remember me</p>
              
        <p class="link">Don't a user? <a href="registration.php">Registration Now</a></p>
  </form>
  </body>
</html>
<?php
    }
?>
<?php
	if(isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
		$email = $_COOKIE['username'];
		$password= $_COOKIE['password'];

		echo "<script>
			document.getElementById('email').value = '$username';
			document.getElementById('password').value = '$password';
		</script>";
	}
?>

