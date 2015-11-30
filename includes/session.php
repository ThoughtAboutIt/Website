<?php
session_start();
include 'includes/dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT Email FROM users WHERE user_id=".$_SESSION['user']);
while($row = mysqli_fetch_array($res))
{
    $_SESSION['username'] = $row['Email'];
}
?>
