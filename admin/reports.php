<?php
session_start();
$uname = $_SESSION['uname'];
include '../db_connection.php';
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
	<section id="stat" style="background-color: rgba(0,0,0,0.8); padding: 20px;">
		<center>
			<table width="90%" border="0">
			<tr>
				<td width="5%"></td>
				<td width="90%" style="padding: 10px;background-color: #1CABE2">
					<ul>
						<li><a href="reports.php">Vaccination by State</a></li>
						<li><a href="gender.php">Vaccination by Gender</a></li>
						<li><a href="lga.php">Vaccination by LGA</a></li>
					</ul>
					<br>
					<h3 align="center" style="color: #000;font-family: Bold;">VACCINATION BY STATE</h3>
					<br>

					<table width="100%" border="1" style="background-color: #fff;">

						<tr>
							<td style="font-weight: 600">STATES</td>
							<td style="font-weight: 600">VACCINATED</td>
						</tr>
						<?php 
									$ftc = "SELECT DISTINCT state  FROM record";									
									$ftcr = mysqli_query($dbcon,$ftc);
									while ($rows=mysqli_fetch_assoc($ftcr)) {
								?>

							
						<tr>

							<td>
								<?php echo $rows['state']; ?>
							</td>
							<td>
								<?php
								$state = $rows['state'];
									$stc = "SELECT COUNT(state) AS total  FROM record WHERE state = '$state'";	
									$stcr = mysqli_query($dbcon,$stc);
									$rowss=mysqli_fetch_assoc($stcr);
								 echo $rowss['total']; 
								 ?>
							</td>
						</tr>
						<?php } ?>
					</table>
					<br>
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