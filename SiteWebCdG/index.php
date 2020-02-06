<?php session_start(); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
   <title>EREMS</title>
   <link rel="shortcut icon" href="images/eremsLogo.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Fichier CSS Bootstrap  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:30px">
<!-- Header Section -->
<header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(black, #FFA500); padding:20px;">
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
<!-- Center Column Content Sectiontest -->
<div class="col-sm-10">
  <h2 class="text-center">TODO </h2>

  <h5 class="text-center">TODO </h5>

  <link rel="stylesheet" href="menu.css">
<nav class="menu">
		<section class="categorie">
			<h3>TODO</h3>
			<ul>
        <?php  include('inc/db.php'); ?>
        <?php  $resultat = mysqli_query($db,"SELECT id, titre FROM doc") or die ("requète non executé");
          if (! $resultat) { echo "Erreur requete"; exit;}
          while ($ligne=mysqli_fetch_array($resultat)){
               echo "<li><a href=\"devis.php?id=".$ligne['id']."\">".$ligne['titre']."</a></li>";
          } ?>
			</ul>
		</section>
	</nav>
    <hr size=8 width="100%">
    <h2 class="text-center">Description</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
</div>
</div>
</div>
</body>
</html>
