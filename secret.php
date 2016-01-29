
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
			<?php include("entete.php");?>



		</header>

		<section>
			<nav>
				<?php include("menu.php"); ?>
			</nav>


			<?php
    			if (!isset($_POST['mdp']) OR $_POST['mdp'] != "banana") { 
    				echo '<p>Mot de passe incorrect</p>';

       			}

   				else  {
       			    echo '<p>Viens à Prague t\'ambiancer</p>'; 
       			    $_SESSION['connection']=1;
       			}

       		?>

		</section>
		
		<footer>
			<?php include("footnote.php"); ?>
		</footer>
	</body>

</html>
