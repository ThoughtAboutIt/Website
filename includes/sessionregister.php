<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: dashboard.php");
}
include_once 'includes/dbconnect.php';
if(isset($_POST['btn-signup']))
{
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$snumber = mysqli_real_escape_string($conn,$_POST['snumber']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$upass = md5(mysqli_real_escape_string($conn,$_POST['pass']));
	
	if(mysqli_query($conn,"INSERT INTO users (FirstName,LastName,StudentNumber,Email,Password) VALUES('$fname','$lname','$snumber','$email','$upass')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
