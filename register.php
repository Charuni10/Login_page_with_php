<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body >
	<div id="main-wrapper">
	<center><h2>Sign Up</h2></center>
		<form action="register.php" method="post">
		<!--	<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div> -->
			<div class="inner_container">
				<label><b>Username</b></label><br>
				<input type="text" placeholder="Enter Username" name="username" required><br><br>
				<label><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="password" required><br><br>
				<label><b>Confirm Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="cpassword" required><br><br>
                <label><b>Name</b></label><br>
                <input type="text" placeholder="Enter your name" name="name" required><br><br>
                <label><b>Mail Id</b></label><br>
                <input type="email" placeholder="Enter your mail id" name="email" required><br><br>
                <label><b>Phone number</b></label><br>
                <input type="phonenumber" placeholder="Enter your number" name="phone_number" required><br><br>
                <label><b>Year of study</b></label><br>
                <input type="text" placeholder="Enter year" name="year" required><br><br>
                <label><b>Department</b></label><br>
                <input type="text" placeholder="Enter the department" name="department" required><br><br>
                <label><b>Degree</b></label><br>
                <input type="text" placeholder="BE/B tech" name="degree" required><br><br>
                <label><b>College Name</b></label><br>
                <input type="text" placeholder="Enter your  college name" name="clgname" required><br><br>
                <label><b>Roll No</b></label><br>
                <input type="text" placeholder="Enter your Roll number" name="rollno" required><br><br>
                <label><b>DOB</b></label><br>
                <input type="date" name="dob" required><br><br>
				<label><b>Number of projects done</b></label><br>
                <input type="text" placeholder="Enter the number of projects" name="projects" required><br><br>
				<label><b>Number of Courses done</b></label><br>
                <input type="text" placeholder="Enter the number of courses" name="courses" required><br><br><br><br>

				<div class="new">
				<button name="register" class="button-22" class="sign_up_btn" type="submit">Sign Up</button><br><br><br>
				
				<a href="index.php"><button  class="button-22" type="button" class="back_btn">Back to Login</button></a><br>
			</div>
		</form>

        <?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				@$name=$_POST['name'];
				@$email=$_POST['email'];
				@$phone_number=$_POST['phone_number'];
				@$year=$_POST['year'];
				@$department=$_POST['department'];
				@$degree=$_POST['degree'];
				@$clgname=$_POST['clgname'];
				@$rollno=$_POST['rollno'];
				@$dob=$_POST['dob'];
				@$projects=$_POST['projects'];
				@$courses=$_POST['courses'];
				if($password==$cpassword)
                
				if($password==$cpassword)
				{
					$query = "select * from register where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into register values('$username','$password','$cpassword','$name','$email','$phone_number','$year','$department','$degree','$clgname','$rollno','$dob','$projects','$courses')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								$_SESSION['name'] = $name;
								$_SESSION['email'] = $email;
								$_SESSION['phone_number'] = $phone_number;
								$_SESSION['year'] = $year;
								$_SESSION['department'] = $department;
								$_SESSION['degree'] = $degree;
								$_SESSION['clgname'] = $clgname;
								$_SESSION['rollno'] = $rollno;
								$_SESSION['dob'] = $dob;
								$_SESSION['projects'] = $projects;
								$_SESSION['courses'] = $courses;

								header( "Location: welcome.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>
