<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body >
	<div id="main-wrapper">
	<center><h2>Login </h2></center>
			<div class="imgcontainer">
			<!--	<img src="imgs/avatar.png" alt="Avatar" class="avatar"> -->
			</div>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>Username</b></label><br>
				<input type="text" placeholder="Enter Username" name="username" required><br><br>
				<label><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" required><br><br><br>
				<div class="new">
				<button  class="button-22" class="login_button" name="login" type="submit">Login</button><br><br>
				<a href="register.php"><button  class="button-22" type="button" class="register_btn">Register</button></a>
                </div>
			</div>
		</form>
</body>
<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from register where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					
					header( "Location: welcome.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>