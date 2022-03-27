<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome to profile <?php echo $_SESSION['username']; ?></h3></center>

		<div class="box">
		<h2>Name : <?php echo $_SESSION['name']; ?> </h2>
		<h2>Email : <?php echo $_SESSION['email']; ?> </h2>

		<h2>Phone Number : <?php echo $_SESSION['phone_number']; ?> </h2>
		<h2>Year : <?php echo $_SESSION['year']; ?> </h2>

		<h2>Department : <?php echo $_SESSION['department']; ?> </h2>
		<h2>Degree : <?php echo $_SESSION['degree']; ?> </h2>

		<h2>Collage Name  : <?php echo $_SESSION['clgname']; ?> </h2>
		<h2>Roll Number  : <?php echo $_SESSION['rollno']; ?> </h2>

		<h2> Date of Birth <?php echo $_SESSION['dob']; ?> </h2>
		<h2>Number of Projects done  : <?php echo $_SESSION['projects']; ?> </h2>
		<h2>Number of Courses done  : <?php echo $_SESSION['courses']; ?> </h2>
 
		<br>
		<br>
		<form action="welcome.php" method="post">
		<!--	<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div> -->
			<div class="inner_container">
				<div class="new">
				<button class="button-22" class="logout" type="submit" name="logout">Log Out</button>	
			</div>
			</div>
		</form>
	</div>
	<?php
		if(isset($_POST['logout']))
		{
			header( "Location: logout.php");
		}
	?>
</body>
</html>