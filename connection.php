<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Que faire à Prague? </title>
		<link rel="stylesheet" type="text/css" href="test.css">	
	</head>

	<body>

		<header>
			<?php include("entete.php"); ?>
		</header>

		<section>
			<nav>
				<?php include("menu.php"); ?>
			</nav>

			<div id="espace_connection">
				<h3>Entrer votre identifiant et votre mot de passe</h3>
				<form method="post" action="secret.php">
					<br>
			<!		<label for="user" Nom d'utilisateur /label
					<input type="text" name="user">

					<label for="password">Mot de passe</label>
					<input type="password" name="mdp" required>
					<input type="submit" value="valider">
					<br>
				</form>
			</div>


		</section>
		
		<footer>
			<?php include("footnote.php"); ?>
		</footer>
	</body>

</html>
