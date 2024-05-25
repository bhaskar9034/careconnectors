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
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
      <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/25/25694.png">

	<style>
body {
	background-image: url('main.webp');
	background-size: 100%;
	background-position: center;
	height: 90%;
	background-repeat: no-repeat; 
}
</style>
</head>
<body>
<center>

<div class="header">
	<h2>You Logged In Successfully..😇</h2>
</div>
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

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>  nice to see you...</p>
    <?php endif ?>
</div>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<p><a href="index.php?logout='1'" style="color: red;"> click here to logout</a> </p>
</body>
</html>