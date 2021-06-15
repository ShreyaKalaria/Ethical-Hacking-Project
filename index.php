<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <style>
    body {
        background-image: url('https://cdn.pixabay.com/photo/2015/04/20/13/22/clouds-731260_960_720.jpg');
 background-size: cover;
 background-attachment: fixed;
}
.content-1{

    position: absolute;
    top: 60%;
    left: 70%;
    transform: translate(-50%, -50%);
    text-align: left;
    color:  rgb(19, 99, 55);
    font-family: sans-serif;
    font-size: 40px;
    font-weight: bold;
    
}
.content-2{

position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
color:  rgb(95, 161, 102);
font-family: sans-serif;
font-size: 40px;
font-weight: bold;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    flex-direction: column;
}
a.square{
    position: relative;
    display: inline-block;
    padding: 15px 36px;
    margin: 10px 0;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 50px;
    letter-spacing: 2px;
    border-radius: 40px;
     background: linear-gradient(90deg,#0162c8,#55e7fc);
    
}

</style>
</head>
<body>
    <center>

<p>Already user Login!!<a href="login.php">Login</a></p>
<p>New User?<a href="registration.php">Registration</a></p>
    </center>
</body>
</html>
