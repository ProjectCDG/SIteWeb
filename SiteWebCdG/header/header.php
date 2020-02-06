<?php
  include('./inc/db.php');
  if(isset($_GET['id'])){
  $resultat = mysqli_query($db,"SELECT * FROM doc WHERE id =".$_GET['id']) or die ("requète non executé");
	  if ($ligne=mysqli_fetch_array($resultat))?>

			<html>
			<div class="col-sm-2">
			<img class="img-fluid float-left" src="images\eremsLogo.png" alt="Logo">
			</div>
			<div class="col-sm-8">
				<style>
					h1 {
						color: white;
					}
				</style>
			 <h1 class="blue-text mb-4 font-bold"><?php echo $ligne['titre']?></h1>
			 </div>
			     <nav class="col-sm-2">
				 <div class="btn-group-vertical btn-group-sm" role="group" aria-label="Button Group">
			  <?php if (!isset($_SESSION['last_name'])){ ?>

			  <button type="button" class="btn btn-secondary" onclick="location.href = 'register-page.php'" >S'enregistrer</button>
			  <button type="button" class="btn btn-secondary" onclick="location.href = 'login.php'" >Connexion</button>


			  <?php } elseif (isset($_SESSION['last_name'])) { ?>

			  <h6><font color="white">Vous êtes connectez en tant que : </font></h2>
			  	<p><font color="white" class="text-center"> <?php echo $_SESSION['first_name']?> <?php echo $_SESSION['last_name']?></font></^p>
			  	  <button type="button" class="btn btn-secondary" onclick="location.href = 'logout.php'" >Deconnexion</button>

					</div>
					    </nav>
					</html>
<?php }?>
<?php }else { ?>

	<html>
	<div class="col-sm-2">
	<img class="img-fluid float-left" src="images\eremsLogo.png" alt="Logo">
	</div>
	<div class="col-sm-8">
		<style>
			h1 {
				color: white;
			}
		</style>
	 <h1 class="blue-text mb-4 font-bold">Mesure CdG</h1>
	 </div>
			 <nav class="col-sm-2">
		 <div class="btn-group-vertical btn-group-sm" role="group" aria-label="Button Group">
		<?php if (!isset($_SESSION['last_name'])){ ?>

		<button type="button" class="btn btn-secondary" onclick="location.href = 'register-page.php'" >S'enregistrer</button>
		<button type="button" class="btn btn-secondary" onclick="location.href = 'login.php'" >Connexion</button>


		<?php } elseif (isset($_SESSION['last_name'])) { ?>

		<h6><font color="white">Vous êtes connectez en tant que : </font></h2>
			<p><font color="white" class="text-center"> <?php echo $_SESSION['first_name']?> <?php echo $_SESSION['last_name']?></font></^p>
				<button type="button" class="btn btn-secondary" onclick="location.href = 'logout.php'" >Deconnexion</button>

			</div>
					</nav>
			</html>

<?php }

}?>

  <!--
  <button type="button" class="btn btn-secondary" onclick="location.href = 'register-view-users.php'"> Afficher les utilisateurs</button>
<button type="button" class="btn btn-secondary" onclick="location.href = 'change-password.php'" >Changer de mot de passe</button> -->
