<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Orange</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/orangelogo.ico">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"   integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"   crossorigin="anonymous">
   <script src="verify.js"></script>
</head>
<body>
<div class="container" style="margin-top:30px">
<!-- Header Section -->
<header class="jumbotron text-center row col-sm-14"
  style="margin-bottom:2px; background:linear-gradient(black, #FFA500); padding:20px;">
  <?php include('header/header.php'); ?>
</header>
<!-- Body Section -->
  <div class="row" style="padding-left: 0px;">
<!-- Left-side Column Menu Section -->
    <nav class="col-sm-2">
      <ul class="nav nav-pills flex-column">
		  <?php include('nav.php'); ?>
      </ul>
    </nav>
  <!-- Validate Input -->
<div class="col-sm-8">
  <h2 class="h2 text-center">Connexion</h2>
  <form action="#" method="post" onsubmit="return checked();"
  name="regform" id="regform">
    <div class="form-group row">
      <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email"
          placeholder="E-mail" maxlength="60" required>
        </div>
    </div>
    <div class="form-group row">
      <label for="password1" class="col-sm-4 col-form-label">Mot de passe:</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="password" name="password"
          placeholder="Password" minlength="8" maxlength="12" required>
          <span id='message'>Entre 8 et 12 caractères.</span>
        </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-12">
        <input id="Connexion" class="btn btn-primary" type="submit" name="login_btn" value="Connexion">
      </div>
    </div>
  </form>
</div>
<!--<?php include('process-login.php');
print_r($_POST);
print_r($_SESSION); ?>
-->
<!-- Right-side Column Content Section -->
<!--
<?php

 if(!isset($errorstring)) {
  echo '<aside class="col-sm-2">';
  include('info-col.php');
  echo '</aside>';
  echo '</div>';
  echo '<footer class="jumbotron text-center row col-sm-14"
    style="padding-bottom:1px; padding-top:8px;">';
  include("footer.php");
 }
 else
 {
  echo '<footer class="jumbotron text-center col-sm-12"
  style="padding-bottom:1px; padding-top:8px;">';
  include("footer.php");
 }
 ?>
-->

</div>
<footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
  <?php include('footer.php'); ?>
  </footer>
</body>
</html>
