<?php 
include '../db_connection.php';
include '../server.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>National Population Commission</title>
	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../jquery/jquery.min.js"></script>
</head>
<body>
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<img src="../img/unicef.png">
				</div>
				<div class="col-md-4">
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="../login.php">User Login</a></li>
						<li><a href="index.php">Admin Login</a></li>
					</ul>
				</div>
				<div class="col-md-12">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div class="login">
		<h3 align="center">ADMIN LOGIN</h3>
		<form action="index.php" method="POST">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="uname" class="form-control" placeholder="Enter Username" required>
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="pword" class="form-control" placeholder="Enter Password" required>
			</div>
			<div class="form-group">
				<br>
				<button class="btn btn-success btn-block" name="login_admin" style="width: 100% !important;padding: 10px !important;margin-top: 10px !important;"><i class="glyphicon glyphicon-log-in"></i> Login</button>
			</div>
		</form>
			</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>
	</div>
	</section>
</body>
</html>