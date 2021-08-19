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
	<title>Reports</title>
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
			color: #fff;
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
					
					<br>
					<h3 align="center" style="color: #fff">EDIT REGISTERED USERS</h3>
					<br>
					<?php 
					$id = $_GET['id'];
									$ftc = "SELECT * FROM users WHERE id='$id'";									
									$ftcr = mysqli_query($dbcon,$ftc);
									$rows=mysqli_fetch_assoc($ftcr);
								?>
					<form action="edit.php" method="POST">
						<label>Name</label>
						<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
						<input type="text" name="name" value="<?php echo $rows['name'] ?>" class="form-control"><br>
						<label>Username</label>
						<input type="text" name="uname" value="<?php echo $rows['username'] ?>" class="form-control"><br>
						<label>Password</label>
						<input type="text" name="pword" value="<?php echo $rows['password'] ?>" class="form-control"><br>
						<button name="edit" class="btn btn-warning">EDIT</button>
					</form>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</td>
				<td width="5%"></td>
			</tr>
		</table></center>
	</section>
<footer style="background-color: #fff;padding: 20px;">
	<h4 align="center">Copyright &copy; 2016 National Population Commision (NPC) Nigeria</h4>
</footer>
</body>
</html>