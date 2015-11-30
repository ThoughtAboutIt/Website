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
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Simple Login Widget</title>
    
    
    
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>

        <link rel="stylesheet" href="css/stylelogin.css">

    
    
    
  </head>

  <body>

<div id="dialog" class="dialog dialog-effect-in">
  <div class="dialog-front">
    <div class="dialog-content">
      <form id="login_form"  method="POST">
        <fieldset>
          <legend>Log in</legend>
          <div class="form-group">
            <label for="email" class="control-label">Email:</label>
            <input type="text" id="user_username" class="form-control" name="email" autofocus/>
          </div>
          <div class="form-group">
            <label for="pass" class="control-label">Password:</label>
            <input type="password" id="user_password" class="form-control" name="pass"/>
          </div>
          <div class="pad-top-20 pad-btm-20">
            <td><button type="submit" name="btn-login">Sign In</button></td>
          </div>
          <div class="text-center">
            <p>Do you wish to register<br> for <a href="#" class="link user-actions"><strong>a new account</strong></a>?</p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
  <div class="dialog-back">
    <div class="dialog-content">
      <form id="register_form" class="dialog-form" action="" method="POST">
        <fieldset>
          <legend>Register</legend>
          <div class="form-group">
            <label for="user_username" class="control-label">First Name:</label>
            <input type="text" id="fname" class="form-control" name="fname"/> 
          </div>
            <div class="form-group">
            <label for="user_username" class="control-label">Last Name:</label>
            <input type="text" id="lname" class="form-control" name="lname"/> 
          </div>
              <div class="form-group">
            <label for="snumber" class="control-label">Student Number:</label>
            <input type="text" id="snumber" class="form-control" name="snumber"/> 
          </div>
             <div class="form-group">
            <label for="user_cnf_password" class="control-label">Email:</label>
            <input type="password" id="user_cnf_password" class="form-control" name="email"/>
          </div>
          <div class="form-group">
            <label for="pass" class="control-label">Password:</label>
            <input type="password" id="pass" class="form-control" name="pass"/>
          </div>
          <div class="form-group pad-top-20 form-group-checkbox">
            <div class="checkbox">
            </div>
          </div>
          <div class="pad-btm-20">
            <td><button type="submit" name="btn-login">Sign In</button></td>
          </div>
          <div class="text-center">
            <p>Return to <a href="#" class="link user-actions"><strong>log in page</strong></a>?</p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
