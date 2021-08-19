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
			background-color: #EDFFFF;
		}
		#header span a{
			font-size: 20px;
			padding: 25px;
			text-decoration: none;
		}	
		#header span a:hover{
			background-color: #B5FFFF;
		}		
		#header .wel{
			margin-top: 25px;
			float: right;
			color: green;
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
	</style>
</head>
<body>
	<section id="header">
		<img src="../img/logo.jpg">
		<span><a href="home.php">HOME</a></span>
		<span><a href="register.php">REGISTER USER</a></span>
		<span><a href="reports.php">REPORTS</a></span>
		<span><a href="index.php">LOGOUT</a></span>
	</section>
	<section id="stat">
		<center>
			<table width="90%" border="0">
			<tr>
				<td width="5%"></td>
				<td width="90%" style="padding: 10px;background-color: #006837">
					<ul>
						<li><a href="reports.php">Population by State</a></li>
						<li><a href="occup.php">Population by Occupation</a></li>
						<li><a href="gender.php">Population by Gender</a></li>
						<li><a href="lga.php">Population by LGA</a></li>
					</ul>
					<br>
					<h3 align="center" style="color: #fff">POPULATION BY OCCUPATION</h3>
					<br>

					<table width="100%" border="1" style="background-color: #fff;">

						<tr>
							<td style="font-weight: 600">OCCUPATION</td>
							<td style="font-weight: 600">POPULATION</td>
						</tr>
						<?php 
									$ftc = "SELECT DISTINCT Occupation  FROM record";									
									$ftcr = mysqli_query($dbcon,$ftc);
									while ($rows=mysqli_fetch_assoc($ftcr)) {
								?>

							
						<tr>

							<td>
								<?php echo $rows['Occupation']; ?>
							</td>
							<td>
								<?php
								$state = $rows['Occupation'];
									$stc = "SELECT COUNT(Occupation) AS total  FROM record WHERE Occupation = '$state'";	
									$stcr = mysqli_query($dbcon,$stc);
									$rowss=mysqli_fetch_assoc($stcr);
								 echo $rowss['total']; 
								 ?>
							</td>
						</tr>
						<?php } ?>
					</table>
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