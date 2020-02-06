<?php session_start(); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
   <title>Orange</title>
   <link rel="shortcut icon" href="images/orangelogo.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Fichier CSS Bootstrap  -->
  <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"   integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
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
  <?php
  if (isset($_POST['ajouter'])) {                                //#1
   include('process-addtemplate.php');
  } else if (isset($_POST['supprimer'])) {
   include('process-supptemplate.php');
 }else if (isset($_POST['modifier'])){
   include('process-modiftemplate.php');
 }
  ?>
<!-- Center Column Content Section -->
<div class="col-sm-10">
  <h2 class="h2 text-center">Page Administrateur </h2>
  <h3 class="h3 text-center">Administration des templates de devis</h3>
  <hr size=8 width="100%">



  <!-- """""""""""""""""Form Ajout Templates""""""""""""""""""""""""""""-->
  <form action="admin.php" method="post" name="templateform" id="templateform">
    <fieldset>
          <legend class="h2 text-left">Ajouter un template</legend> <!-- Titre du fieldset -->
          <div class="form-group row">
            <label for="titre" class="col-sm-4 col-form-label">Titre : </label>
              <div class="col-sm-8">
                <input type="text" name="titre" id="titre" placeholder="Ex : installation" class="form-control"
                value="<?php if (isset($_POST['titre'])) echo $_POST['titre']; ?>" autofocus required />
              </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-4 col-form-label">Description : </label>
              <div class="col-sm-8">
                <textarea name="description" id="description" class="form-control"
                value="<?php if (isset($_POST['description'])) echo $_POST['description']; ?>"  required></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label for="mention" class="col-sm-4 col-form-label">Mention : </label>
              <div class="col-sm-8">
                <textarea name="mention" id="mention" class="form-control"
                value="<?php if (isset($_POST['mention'])) echo $_POST['mention']; ?>"  required></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label for="conditionGene" class="col-sm-4 col-form-label">Condition Générale : </label>
              <div class="col-sm-8">
                <textarea name="conditionGene" id="conditionGene" class="form-control"
                value="<?php if (isset($_POST['conditionGene'])) echo $_POST['conditionGene']; ?>"  required></textarea>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-12">
          	<input id="submit" class="btn btn-primary" type="submit" name="ajouter" value="Valider">
              </div>
              <hr>
          	</div>
      </fieldset>
</form>
<hr size=8 width="100%">
<!-- """""""""""""""""Form Suppresion Templates""""""""""""""""""""""""""""-->
<form action="admin.php" method="post">
      <fieldset>
          <legend class="h2 text-left">Supprimer un template</legend> <!-- Titre du fieldset -->
          <p>
       <label for="suppTemplate">Sélectionnez un Template a supprimer</label><br />
       <select name="suppTemplate" id="suppTemplate">
         <div class="form-group row">
           <div class="col-sm-8">
         <?php 	include('inc/db.php'); ?>
         <?php  $resultat = mysqli_query($db,"SELECT id, titre FROM doc") or die ("requète non executé");
           if (! $resultat) { echo "Erreur requete"; exit;}
           while ($ligne=mysqli_fetch_array($resultat)){
                echo "<option value=".$ligne['id'].">".$ligne['titre']."</option>";
           } ?>
          </div>
        </div>
       </select>
       <div class="form-group row">
           <div class="col-sm-12">
         <input id="submit"  class="btn btn-primary" type="submit" name="supprimer" value="Supprimer">
           </div>
         </div>
      </fieldset>
    </form>
    <hr size=8 width="100%">

    <!-- """""""""""""""""Form Modification Templates""""""""""""""""""""""""""""-->
    <form action="admin.php" method="post">
          <fieldset>
              <legend class="h2 text-left">Modifier un template </legend> <!-- Titre du fieldset -->
              <p>
           <label for="suppTemplate">Sélectionnez un Template a modifier</label><br />
           <select name="modifTemplate" id="modifTemplate">
             <div class="form-group row">
               <div class="col-sm-8">
             <?php 	include('inc/db.php'); ?>
             <?php  $resultat = mysqli_query($db,"SELECT * FROM doc") or die ("requète non executé");
               if (! $resultat) { echo "Erreur requete"; exit;}
               while ($ligne=mysqli_fetch_array($resultat)){
                    echo "<option value=".$ligne['id'].">".$ligne['titre']."</option>";

               } ?>
              </div>
            </div>
           </select>
           <div class="form-group row">
             <label for="titre" class="col-sm-4 col-form-label">Titre : </label>
               <div class="col-sm-8">
                 <input type="text" name="titre" id="titre" placeholder="Ex : installation" class="form-control"
                 value="<?php if (isset($_POST['titre'])) echo $_POST['titre']; ?>" autofocus required />
               </div>
           </div>
           <div class="form-group row">
             <label for="description" class="col-sm-4 col-form-label">Description : </label>
               <div class="col-sm-8">
                 <textarea name="description" id="description" class="form-control"
                 value="<?php if (isset($_POST['description'])) echo $_POST['description']; ?>"  required></textarea>
               </div>
           </div>
           <div class="form-group row">
             <label for="mention" class="col-sm-4 col-form-label">Mention : </label>
               <div class="col-sm-8">
                 <textarea name="mention" id="mention" class="form-control"
                 value="<?php if (isset($_POST['mention'])) echo $_POST['mention']; ?>"  required></textarea>
               </div>
           </div>
           <div class="form-group row">
             <label for="conditionGene" class="col-sm-4 col-form-label">Condition Générale : </label>
               <div class="col-sm-8">
                 <textarea name="conditionGene" id="conditionGene" class="form-control"
                 value="<?php if (isset($_POST['conditionGene'])) echo $_POST['conditionGene']; ?>"  required></textarea>
               </div>
           </div>
           <div class="form-group row">
               <div class="col-sm-12">
             <input id="submit"  class="btn btn-primary" type="submit" name="modifier" value="Modifier">
               </div>
           </div>
          </fieldset>
        </form>


</div>
</div>
</div>
<!-- Footer Content Section -->
<footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>
