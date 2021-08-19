<?php
session_start();
$uname = $_SESSION['uname'];
include '../db_connection.php';
include '../server.php';
$sql= "SELECT * FROM users WHERE username='$uname'";
$run=mysqli_query($dbcon,$sql);
$row=mysqli_fetch_assoc($run);
$name = $row['name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<style type="text/css">
	body{
			 background-image:radial-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.8)), url('../img/2.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
		}
		#header{
			background-color: #000;
			padding: 20px;
		}
		#header span a{
			font-size: 20px;
			padding: 15px;
			text-decoration: none;
			color: #fff;
		}	
		#header span a:hover{
			background-color: #1CABE2;
			color: #fff;
			transition: 0.3s;
		}
		#header img{
			width: 50px;
	height: 50px;
		}		
		#header .wel{
			margin-top: 5px;
			float: right;
			color: #fff;
			font-size: 18px;
		}
		#stat .total{
			background-color: #B5FFFF;
			width: 150px;
			height: 150px;
			padding-top: 60px;
			border-radius: 50%;
			margin:10px;
			font-size: 20px;
			padding-left: 20px;
			position: absolute;
			font-weight: 1000;
		}
		#stat .male{
			background-color: #B5FFFF;
			width: 150px;
			height: 150px;
			padding-top: 60px;
			border-radius: 50%;
			margin:10px;
			font-size: 20px;
			padding-left: 20px;
			position: absolute;
			font-weight: 1000;
		}
		#stat .fem{
			background-color: #B5FFFF;
			width: 150px;
			height: 150px;
			padding-top: 60px;
			border-radius: 50%;
			margin:10px;
			font-size: 20px;
			padding-left: 20px;
			position: absolute;
			font-weight: 1000;
		}
		#stat .yth{
			background-color: #B5FFFF;
			width: 150px;
			height: 150px;
			padding-top: 60px;
			border-radius: 50%;
			margin:10px;
			font-size: 20px;
			padding-left: 20px;
			position: absolute;
			font-weight: 1000;
		}
		#stat .inf{
			background-color: #B5FFFF;
			width: 150px;
			height: 150px;
			padding-top: 60px;
			border-radius: 50%;
			margin:10px;
			font-size: 20px;
			padding-left: 20px;
			position: absolute;
			font-weight: 1000;
		}
		ul{
			padding: 0;
			margin: 0;
			list-style: none;
			overflow: hidden;
			background-color: #fff;
		}
		li{
			float: left;
		}
		li a{
			text-decoration: none !important;
			display: block;
			padding: 10px;
			color: #000;

		}
		td{
			padding: 15px;
		}
		label{
			color: #fff
		}

		input {
			padding: 22px !important;
			border: 1px solid #1CABE2 !important;
			background-color: transparent !important;
			color: #fff !important;
		}
		select {
			padding: 22px !important;
			border: 1px solid #1CABE2 !important;
			background-color: transparent !important;
			color: #fff !important;
		}


		.btn{
			padding: 15px;
			background-color: #1CABE2;
			
			border: none;
			color: #fff;
			margin-top: 20px;
		}
		.btn:hover{
			transition: 0.5s;
			background-color: #1CABE2;
		}
	</style>
</head>
<body>
	<section id="header">
		<img src="../img/unicef.png">
		<span><a href="home.php">Home</a></span>
		<span><a href="register.php">Register User</a></span>
		<span><a href="reports.php">Reports</a></span>
		<span><a href="../index.php">Logout</a></span>
	</section>
	<section id="stat" style="background-color: rgba(0,0,0,0.8); padding: 20px;height: 100vh">
		<center>
			<table width="90%" border="0">
			<tr>
				<td width="5%"></td>
				<td width="90%" style="padding: 10px;">
						<h3 align="center" style="color: #fff;font-family: Bold;">REGISTER USER</h3>
						<br>
						<form action="register.php" method="POST">
							<label>Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter User's Fullname" required><br>
							<label>Username</label>
							<input type="text" name="uname" class="form-control" placeholder="Enter Username" required><br>
							<label>Password</label>
							<input type="password" name="pword" class="form-control" placeholder="Enter Password" required><br>
							<button class="btn btn-success btn-block" name="reg_user">REGISTER</button>
						</form>
					<br><br><br>
					<center><a href="view_reg.php"><button class="btn btn-warning">VIEW REGISTERED USERS</button></a></center>
					<br><br><br><br><br><br><br>
				</td>
				<td width="5%"></td>
			</tr>
		</table></center>
	</section>
<footer style="background-color: #fff;padding: 20px;">
	<h4 align="center">Copyright &copy; UNICEF, Nigeria</h4>
</footer>
</body>
</html>