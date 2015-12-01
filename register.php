<!--Session -->
<?php include_once "includes/sessionregister.php";// include for session ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
 <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>
<link rel="stylesheet" href="css/stylelogin.css">    
</head>
    
<body>
<div id="dialog" class="dialog dialog-effect-in">
  <div class="dialog-front">
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
            <label for="email" class="control-label">Email:</label>
            <input type="email" id="email" class="form-control" name="email"/>
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
            <td><button type="submit" name="btn-login">Sign up</button></td>
          </div>
          <div class="text-center">
            <p>Return to <a href="index.php" class="link user-actions"><strong>log in page</strong></a>?</p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<!-- Javascripts -->
<?php include_once "includes/nav.php";// include for JS ?>

    
  </body>
</html>
