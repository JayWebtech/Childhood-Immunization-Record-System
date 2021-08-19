<?php 

include '../db_connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id'";
if (mysqli_query($dbcon,$sql)) {
	echo "<script>alert('Record Deleted Successfully')</script>";
		echo "<script>window.open('view_reg.php','_self')</script>";
}
else{
	echo "<script>alert('Not Successfully')</script>";
		echo "<script>window.open('view_reg.php','_self')</script>";
}

?>