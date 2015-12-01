<?php
session_start();
include 'includes/dbconnect.php';
if(isset($_SESSION['user'])!="")
{
	header("Location: dashboard.php");
}
if(isset($_POST['btn-login']))
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$upass = mysqli_real_escape_string($conn,$_POST['pass']);
    
	$sql = "SELECT * FROM users WHERE Email='".$email."'";
    $logon = $conn->query($sql);
    if (!$logon)
    {
            exit("DBMS error");
    }
    if ($logon->num_rows > 0)
    {
        while($row = $logon->fetch_assoc())
        {
            if($row["Password"] == md5($upass))
	       {
                $_SESSION["user"] = $row["user_id"];
		      header("Location: dashboard.php");
	       }
	       else
	       {
		      ?>
                <script>alert($_POST["email"]);</script>
                <?php
	       }  
        }
    }	
}
?>
