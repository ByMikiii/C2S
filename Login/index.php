<?php
$title = "C2S Login ByMikiii";
$icon = "../Images/monkaH.png";
require('../parts/header.php');

$error = isset($_GET['error']) ? $_GET['error'] : '';
?>

<div id='login-elements'>
<h2 id="h2-login">Login</h2>
<form id="login-form" method="POST" action="/C2S/phpscripts/loginscript.php">
  <div class="row mb-3">
    <div class="col-sm-10">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
      <input type="username" class="form-control" name='username' required autocomplete="off">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" name='password' required autocomplete="off">
    </div>
  </div>
  <p id="error-message" ><?php echo $error ?></p>
  <button type="submit" class="btn btn-dark" id="signinbutton">Sign in</button>
</form>
</div>
<?php
require('../parts/footer.php');
?>