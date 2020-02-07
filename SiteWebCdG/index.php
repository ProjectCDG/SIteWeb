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
<!-- Center Column Content Section TEST -->
<div class="col-sm-10">
  <h2 class="text-center">TODO</h2>

  <h5 class="text-center">TODO</h5>
  <?if (isset($_SESSION['last_name'])) { ?>
  <table class="table table-bordered">
    <tr>
      <th><p class="text-error">id</p></th>
      <th><p class="text-error">Prénom</p></th>
      <th><p class="text-error">Nom</p></th>
      <th><p class="text-error">Date création</p></th>
    </tr>

      <?php  include('inc/db.php'); ?>
      <?php $resultat = mysqli_query($db,"SELECT userid, first_name, last_name, register_date FROM users") or die ("requète non executé");
        if (! $resultat) { echo "Erreur requete"; exit;}
        while ($ligne=mysqli_fetch_array($resultat)){
          echo"<tr>";
            echo "<td>" .$ligne['userid']. "</td>";
            echo "<td>" .$ligne['first_name']. "</td>";
            echo "<td>" .$ligne['last_name']. "</td>";
            echo "<td>" .$ligne['register_date']. "</td>";
          echo"</tr>";
        }?>
<?}?>


  </table>

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



</div>
</div>
</div>

</body>
</html>
