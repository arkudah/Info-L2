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


		<div id="bann"> 
			<img src="Image/prague.jpg" alt="Prague" width="85%" />
		</div>


		<section>
			<nav>
				<?php include("menu.php"); ?>
			</nav>


			<article>
				<form method="post" action="traitement.php">
					<fieldset>
						<legend>Veuillez entrer vos coordonnées</legend>

						<label for="prenom">Quel est votre prénom ?</label>
       					<input type="text" name="prenom" required /><br />

       					<label for="nom">Quel est votre nom ?</label>
      					<input type="text" name="nom" required /><br />

      					<label for="email">Quelle est votre adresse mail ?</label>
      					<input type="email" name="email" required /><br />
					</fieldset>

					<fieldset>

						<label for="objet">Quel est l'objet de votre mail ?</label><br />
							<select name="objet" id="objet" required>
								<optgroup label="Conseils"> 
           							<option value="c_hotels">Conseils concernant les hotels</option>
           							<option value="c_visite">Conseils concernant les visites </option>
           							<option value="c_sortie">Conseils concernant les sorties</option>
           							<option value="c_restaurant">Conseils concernant les restaurants</option>
           							<option value="c_bar">Conseils concernant les bars</option>
           						</optgroup>
           						<optgroup label="Erreur">
           							<option value="s.erreur">Signaler une erreur dans les informations</option>
           							<option value="s.">Signaler un problème sur le site</option>
           						</optgroup>
       						</select>
					</fieldset>
 					
 					<div id="bouton">
 						<p>
      					<label for="redaction">Rédigez votre mail ici</label><br />
       					<textarea name="redaction" id="redaction" rows="10" cols="80"></textarea>
   						</p>
 					</div>

					<input type="submit" value="Envoyer" ></code>
				</form>
			</article>
		</section>
		<footer>
			
			<div id="bas"> 
				<?php include("footnote.php"); ?>
		</footer>
	</body>
</html>