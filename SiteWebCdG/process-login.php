<?php
  include('inc/db.php');

	if (isset($_POST['login_btn'])) {
		$email = $_POST['email'];
		$password1 = $_POST['password'];
			$password = md5($password1);
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				foreach($results as $users)
				$_SESSION['first_name'] = $users['first_name'];
				$_SESSION['last_name'] = $users['last_name'];
				$_SESSION['registration_date'] = $users['registration_date'];
				$_SESSION['email'] = $users['email'];
				$_SESSION['rang'] = $users['rang'];
       	        ?>

                                <p>CONNEXION REUSSI, REDIRECTION EN COURS !</p>



				<?php header('Location: index.php');
			}

			else {
				?>
                                <p>NOM DE COMPTE OU MOT DE PASSE INCORECT</p>
                <?php }
		}
?>
