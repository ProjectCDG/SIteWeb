<?php
  $resultat = mysqli_query($db,"DELETE FROM doc WHERE id =".$_POST['suppTemplate']) or die ("requète non executé");
  header ("location: confirmation-supp.php")
?>
