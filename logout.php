<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Thank you</h2></center>
		<center class="box"><h3>Have a good day! <?php echo $_SESSION['username']; ?></h3></center>
	
		<form action="logout.php" method="post">
		<!--	<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div> -->
			<div class="inner_container">
				<div class=new>
				<button class="button-22" class="login" type="submit" name="login">Log In</button>
			</div>	
			</div>
		</form>
	
	</div>
	<?php
		if(isset($_POST['login']))
		{
			header( "Location: index.php");
		}
	?>
</body>
</html>