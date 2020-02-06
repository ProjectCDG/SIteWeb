<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Orange</title>
 <meta charset="utf-8">
 <link rel="shortcut icon" href="images/favicon.ico">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS File -->
 <link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
 integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
 crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:30px">
<!-- Header Section -->
<header class="jumbotron text-center row"
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
<!-- Center Column Content Section -->
 <div class="col-sm-8 text-center">
 <h2>Succèes</h2>
Modification effectuée avec succès </div>
<!-- Right-side Column Content Section -->
 <aside class="col-sm-2">
     <?php include('info-col.php'); ?>
 </aside>
 </div>
<!-- Footer Content Section -->
<footer class="jumbotron text-center row"
style="padding-bottom:1px; padding-top:8px;">
 <?php include('footer.php'); ?>
</footer>
</div>
</body>
</html>
