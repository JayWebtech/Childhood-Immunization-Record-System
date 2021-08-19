<?php
session_start();
$uname = $_SESSION['uname'];
include 'db_connection.php';
include 'server.php';
$sql= "SELECT * FROM users WHERE username='$uname'";
$run=mysqli_query($dbcon,$sql);
$row=mysqli_fetch_assoc($run);
$name = $row['name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Record</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		body{
			 background-image:radial-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.8)), url('img/2.jpg');
    background-size: cover;
    background-position: center;
    height: 110vh;
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
		textarea {
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
	<section id="stat" style="background-color: rgba(0,0,0,0.8); padding: 20px;height: 110vh">
		<h2 align="center" style="color: #fff;font-family: Bold;">TAKE RECORD</h2>
		<br>
		<form action="register.php" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
			<div class="form-group">
				<label>Firstname</label>
				<input type="text" name="fname" placeholder="Enter Firstname" class="form-control" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Middlename</label>
				<input type="text" name="mname" placeholder="Enter Middlename" class="form-control">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Lastname</label>
				<input type="text" name="lname" placeholder="Enter Lastname" class="form-control" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Gender</label>
				<select name="gender" class="form-control">
					<option value="MALE">MALE</option>
					<option value="FEMALE">FEMALE</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Age</label>
				<input type="number" name="age" class="form-control" placeholder="Enter Age" required>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
				<label>LGA</label>
				<input type="text" name="lga" placeholder="Enter L.G.A" class="form-control" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>State</label>
				 <select class="form-control" name="state">
                      <option value="Abia">Abia</option>
                      <option value="Adamawa">Adamawa</option>
                      <option value="Akwa Ibom">Akwa Ibom</option>
                      <option value="Anambra">Anambra</option>
                      <option value="Bauchi">Bauchi</option>
                      <option value="Bayelsa">Bayelsa</option>
                      <option value="Benue">Benue</option>
                      <option value="Borno">Borno</option>
                      <option value="Cross River">Cross River</option>
                      <option value="Delta">Delta</option>
                      <option value="Ebonyi">Ebonyi</option>
                      <option value="Edo">Edo</option>
                      <option value="Ekiti">Ekiti</option>
                      <option value="Enugu">Enugu</option>
                      <option value="Gombe">Gombe</option>
                      <option value="Imo">Imo</option>
                      <option value="Jigawa">Jigawa</option>
                      <option value="Kaduna">Kaduna</option>
                      <option value="Kano">Kano</option>
                      <option value="Katsina">Katsina</option>
                      <option value="Kebbi">Kebbi</option>
                      <option value="Kogi">Kogi</option>
                      <option value="Kwara">Kwara</option>
                      <option value="Lagos">Lagos</option>
                      <option value="Nasarawa">Nasarawa</option>
                      <option value="Niger">Niger</option>
                      <option value="Ogun">Ogun</option>
                      <option value="Ondo">Ondo</option>
                      <option value="Osun">Osun</option>
                      <option value="Oyo">Oyo</option>
                      <option value="Plateau">Plateau</option>
                      <option value="Rivers">Rivers</option>
                      <option value="Sokoto">Sokoto</option>
                      <option value="Taraba">Taraba</option> 
                      <option value="Yobe">Yobe</option>
                      <option value="Zamfara">Zamfara </option> 
                      <option value="FCT">FCT </option> 

                  </select>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label>Type of Vaccine</label>
				<input type="text" name="vaccine" placeholder="Enter Type of Vaccine" class="form-control" required>
			</div>
		</div>


		<div class="col-md-12">
			<div class="form-group">
				<label>Address</label>
				<textarea name="address" class="form-control" placeholder="Enter Address"></textarea>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<button class="btn btn-default btn-block" name="register">REGISTER</button>
			</div>
		</div>
			</div>
		</div>
		</form>
	</section>
<footer style="background-color: #fff;padding: 20px;">
	<h4 align="center">Copyright &copy;UNICEF, Nigeria</h4>
</footer>
</body>
</html>