<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GLV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <?php include('header.php'); ?>
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

   <?php if($_SESSION['rang'] == '1') { ?>
    <?php include('process-comment.php') ?>
  <?php } ?>

   <?php  if ($_SESSION['rang'] == '0') {?>
	     <div class="col-sm-10">
          <form action="#" method="post">
  	       	<h4 class="text-center"> Commentaires </h4>
  		      <textarea class="col-sm-12" name="comment" maxlength="545" style="margin-bottom:2px; background:linear-gradient(black, #0073e6); padding:20px; color:white;"></textarea>
		        <h6><font color="grey">545 caractères maximum</font></h6>
		         <input id="submit" class="btn btn-primary" type="submit" name="cmnt_btn" value="Envoyez">
 		     </form>
       </div>
       <?php print_r($_POST) ?>
  <?php   } ?>
</div>
</div>
 <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
  <?php include('footer.php'); ?>
  </footer>
</body>
