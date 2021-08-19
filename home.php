<?php
session_start();
$uname = $_SESSION['uname'];
include 'db_connection.php';
$sql= "SELECT * FROM users WHERE username='$uname'";
$run=mysqli_query($dbcon,$sql);
$row=mysqli_fetch_assoc($run);
$name = $row['name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		body{
			 background-image:radial-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.8)), url('img/2.jpg');
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
		.box{
			background-color: #1CABE2;
			padding: 50px;
			border-radius: 30px;
		}
		.box h6{
			font-size: 30px;
			color: #000;
			font-family: Bold;
		}
	</style>
</head>
<body>
	<section id="header">
		<img src="img/unicef.png">
		<span><a href="home.php">Home</a></span>
		<span><a href="register.php">Take Record</a></span>
		<span><a href="index.php">Logout</a></span>
		<span class="wel">WELCOME <?php echo $name; ?></span>
	</section>
	<section id="stat">
		<center><table width="90%" border="0">
			<tr>
				<td width="5%"></td>
				<td width="90%" style="padding: 10px;background-color: rgba(0,0,0,0.8);border: 2px dashed #1CABE2;margin-top: 20px !important;">
					<table width="100%">
						<tr>
							<td width="20%"></td>
							<td width="60%" style="color: #fff; text-align: center;background-color: #1CABE2
;padding: 15px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
								<h2 style="font-family: Bold;color: #000">WELCOME</h2>
								<br>
					<p style="line-height: 1.9em;font-size: 15px;border: 2px solid #000;border-style: dashed;padding: 10px;color: #000;font-family: Regular;">Welcome to The United Nations International Children's Emergency Fund. The circles below shows the overview of number of children that have been immunized in Nigeria so far.  Note that this system is a real-time system.</p>
							</td>
							<td width="20%"></td>
						</tr>
					</table>
					<br><br><br><br>
					<?php

					$ret = "SELECT * FROM record";
					$ret_run = mysqli_query($dbcon,$ret);
					$tot = mysqli_num_rows($ret_run);
					$row=mysqli_fetch_assoc($ret_run);

					$ret2 = "SELECT * FROM record WHERE gender = 'MALE'";
					$ret_run2 = mysqli_query($dbcon,$ret2);
					$tot2 = mysqli_num_rows($ret_run2);
					$row2=mysqli_fetch_assoc($ret_run2);

					$ret3 = "SELECT * FROM record WHERE gender = 'FEMALE'";
					$ret_run3 = mysqli_query($dbcon,$ret3);
					$tot3 = mysqli_num_rows($ret_run3);
					$row3=mysqli_fetch_assoc($ret_run3);
					 ?>
					
							<div class="container">
								<div class="row">
									<div class="col-md-4 text-center">
										<div class="box">
											<span class="glyphicon glyphicon-user" style="font-size: 50px;color: #000;"></span>
											<h6>TOTAL: <?php echo $tot; ?></h6>
										</div>
									</div>
									<div class="col-md-4 text-center">
										<div class="box">
											<span class="glyphicon glyphicon-user" style="font-size: 50px;color: #000;"></span>
											<h6>BOYS: <?php echo $tot2; ?></h6>
										</div>
									</div>
									<div class="col-md-4 text-center">
										<div class="box">
											<span class="glyphicon glyphicon-user" style="font-size: 50px;color: #000;"></span>
											<h6>GIRLS: <?php echo $tot3; ?></h6>
										</div>
									</div>
								</div>
							</div>
						
					</table>
					<br><br><br>
				</td>
				<td width="5%"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table></center>
	</section>
<footer style="background-color: #fff;padding: 20px;">
	<h4 align="center">Copyright &copy; UNICEF, Nigeria</h4>
</footer>
</body>
</html>