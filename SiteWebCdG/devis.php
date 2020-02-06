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
 <style>
   h1 {
     color: white;
   }
 </style>
</body>
</html>

<?php session_start();
if (isset($_POST['generer'])) {                                //#1
 include('generationFPDF.php');
}
  include('inc/db.php');
  if(isset($_GET['id'])){
  $resultat = mysqli_query($db,"SELECT * FROM doc WHERE id =".$_GET['id']) or die ("requète non executé");
    if ($ligne=mysqli_fetch_array($resultat)){ ?>
      <div class="container" style="margin-top:30px">
      <!-- Header Section -->
      <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(black, #FFA500); padding:20px;">
      <?php include('header/header.php');  ?>
      </header>
      <!-- Body Section -->
        <div class="row" style="padding-left: 0px;">
      <!-- Left-side Column Menu Section -->
        <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column">
      		<?php include('nav.php'); ?>
            </ul>
        </nav>
        <hr>

      <!-- Center Column Content Section -->
      <div class="col-sm-10">
        <h2 class="text-center">Description </h2>
          <p><?php echo ''.$ligne['description'].''; ?> </p>
          <hr>

        <h5 class="text-center">Mention </h5>
          <p><?php echo ''.$ligne['mention'].''; ?> </p>
          <hr>

        <h5 class="text-center">Condition Générale </h5>
         <p><?php echo ''.$ligne['conditionGene'].''; ?> </p>
         <hr>
         <form action="generationFPDF.php?id=<?php echo ''.$ligne['id'].'';?>" method="post" name="generateform" id="generateform" target=" _blank">
         <div class="col-sm-12">
       <input id="submit" class="btn btn-primary" type="submit" name="generer" value="Generer">

         </div>
         </form>
       </div>
       </div>
       </div>

         <!-- Footer Content Section -->
         <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
           <?php include('footer.php'); ?>


<?php  }

}?>
<?php  if (! $resultat) { echo "Erreur requete"; exit;} ?>
