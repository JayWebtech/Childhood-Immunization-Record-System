<?php
session_start();
include 'db_connection.php';

if (isset($_POST['login'])) {
	
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];

	$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pword'";
	$run=mysqli_query($dbcon,$sql);
	if (mysqli_num_rows($run)>0) {
		$_SESSION['uname']=$uname;
		echo "<script>window.open('home.php','_self')</script>";
	}
	else{
		echo "<script>alert('Wrong Login Details')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}

if (isset($_POST['login_admin'])) {
	
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];

	$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pword'";
	$run=mysqli_query($dbcon,$sql);
	if (mysqli_num_rows($run)>0) {
		$_SESSION['uname']=$uname;
		echo "<script>window.open('home.php','_self')</script>";
	}
	else{
		echo "<script>alert('Wrong Login Details')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}


if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$lga = $_POST['lga'];
	$state = $_POST['state'];
	$vaccine = $_POST['vaccine'];
	
	$insert = "INSERT INTO record (FirstName, MiddleName, LastName, Gender, Age, Address, LGA, State, vaccine) VALUES ('$fname','$mname','$lname','$gender','$age','$address','$lga','$state','$vaccine')";
	if (mysqli_query($dbcon,$insert)) {
		echo "<script>alert('Record Inserted Successfully')</script>";
	}else{
		echo "<script>alert('Error while Inserting')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}

}

if (isset($_POST['reg_user'])) {
	
	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	
	$insert = "INSERT INTO users (name, username, password) VALUES ('$name','$uname','$pword')";
	if (mysqli_query($dbcon,$insert)) {
		echo "<script>alert('Record Inserted Successfully')</script>";
		echo "<script>window.open('view_reg.php','_self')</script>";
	}else{
		echo "<script>alert('Error while Inserting')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}

}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	
	$up = "UPDATE users SET name = '$name', username = '$uname', password = '$pword' WHERE id = '$id'";
	if (mysqli_query($dbcon,$up)) {
		echo "<script>alert('Record Updated Successfully')</script>";
		echo "<script>window.open('view_reg.php','_self')</script>";
	}else{
		echo "<script>alert('Error while Inserting')</script>";
		echo "<script>window.open('view_reg.php','_self')</script>";
	}

}
 ?>