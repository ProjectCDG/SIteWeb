<?php 
	  include('inc/db.php'); 

  if($_SESSION['rang'] == '1') { 

			$query = "SELECT * FROM commentaire";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { ?>

                        <p>CONNEXION REUSSI, REDIRECTION EN COURS !</p>
            <?php 


	
			}
		}

	 elseif ($_SESSION['rang'] == '0') {
	 if (isset($_POST['cmnt_btn'])) { 
	 	$last_name = $_POST['last_name'];
		$first_name = $_POST['first_name'];
		$comment = $_POST['comment'];
		
	 	$query = "INSERT INTO commentaire (comment, first_name, last_name) ('$comment, '$first_name', '$last_name')";
	 	header('Location: index.php')


	 }
	 }
?>