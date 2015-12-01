<!--Session -->
<?php include_once "includes/session.php";// include for session ?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Login</title>
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
            <input type="email" id="email" class="form-control" name="email" autofocus/>
          </div>
          <div class="form-group">
            <label for="pass" class="control-label">Password:</label>
            <input type="password" id="pass" class="form-control" name="pass"/>
          </div>
          <div class="pad-top-20 pad-btm-20">
            <td><button type="submit" name="btn-login">Sign In</button></td>
          </div>
          <div class="text-center">
            <p>Do you wish to register<br> for <a href="register.php" class="link user-actions"><strong>a new account</strong></a>?</p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
<!-- Javascripts -->
<?php include_once "includes/nav.php";// include for JS ?>
</body>
</html>
