<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="/C2S/app.css" rel="stylesheet">
  <title><?php echo $title ?></title>
  <link rel="icon" type="icon" href= <?php echo $icon?> >
</head>
<body>


<header>
<div class="topnav">
<a id="home-button" href="/C2S/phpscripts/logout.php" class="btn btn-dark">Home</a>
<?php if (!isset($_SESSION["username"])) : ?>
  <div class='nav-right'>
  <a id="login-button" href="/C2S/Login/" class="btn btn-dark">Login</a>
  </div>
  <?php else : ?>
    <span id=logged-username><?php echo $_SESSION["username"] ?></span>
    <div class='nav-right'>
      <a href="/C2S/phpscripts/logout.php" class= "btn btn-dark" id="logout-button">Log Out</a>
  </div>
  <?php endif; ?>
</div>
</header>
