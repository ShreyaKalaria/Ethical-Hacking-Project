<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
      <?php endif ?>
      
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    
    <style>
    body
    {
    background: url('https://cdn.pixabay.com/photo/2015/04/20/13/22/clouds-731260_960_720.jpg');

    margin: 0px;
    padding: 0px;
}
.main-1{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.searchbox{
    border: 3px solid #be32e1;
    height: 40px;
    width: 300px;
    border-radius: 50px;
    padding: 0px 10px;
}
.search-btn{
    border: 3px solid #be32e1;
    height: 40px;
    width: 100px;
    border-radius: 20px;
    padding: 0px 10px;
}
</style>
</head>
<body>
    <div class="home_pic">
    <header>
        <div class="main">
            <h2 class="home_title">Home Page</h2>
            <ul>
            <div class="center_content">Welcome &nbsp;<?php echo $_SESSION['username']; ?></div>
            
            <li><a href="comment.php">Comments</a></li>

            <li><a href="update.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-1">
        <form method="GET" action="search.php">

                <input type="text" name="search" class="searchbox" placeholder="Search for others">
                <input type="submit" name="submit" class="search-btn" value="Search">

        </form>
        </div>
    </header>
    </div>
</body>
</html>
