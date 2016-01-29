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
			<! on met l'entete>
			<?php include("entete.php"); ?>
		</header>

		<div id="bann"> 
			<! on insere l'image>
			<img src="Image/prague.jpg" alt="Prague" width="85%" />
		</div>

		<section>
			<nav>
				<!on insere le menu> 
				<?php include("menu.php"); ?>

			</nav>

			<article>
				<h1>Histoire de Prague</h1>
				<div id="histoire">
					<p style="text-indent:2em"> Prague, en tchèque Praha est la capitale et la plus grande ville de la République tchèque. Elle est à la fois l’une des quatorze régions du pays, le chef-lieu de la région administrative de Bohême-Centrale et la capitale de la région historique de Bohême. Elle est traversée par la Vltava (Moldau en allemand). </p>

					<p style="text-indent:2em">Prague est située en plein cœur de l'Europe centrale. Elle fut par le passé capitale du royaume de Bohême, du Saint-Empire romain germanique et de la Tchécoslovaquie. La ville aux mille tours et mille clochers (qui est encore la caractéristique architecturale de la ville) a miraculeusement échappé aux destructions de la Seconde Guerre mondiale et offre une architecture mêlant les styles préroman, roman, gothique, baroque, rococo, Art nouveau et cubiste. En 1968, le Printemps de Prague et l'écrasement du « Socialisme à visage humain » par les troupes de l'URSS et du pacte de Varsovie ont profondément marqué les Praguois et inspiré la culture des années 1960-1980. Depuis 1992, le centre ville historique est inscrit sur la liste du patrimoine mondial par l'UNESCO. </p>

					<p style="text-indent:2em">Prague est la cinquième région urbaine la plus riche de l'Union européenne en termes de PIB par habitant, derrière la région urbaine de Hambourg mais devant l'Île-de-France5, la progression est continue ces dernières années. En 2006, selon Eurostat, le chômage était de 2,8 % dans la région de Prague6. Le contexte économique national est également plutôt favorable car la République tchèque est, avec les Pays-Bas, le pays où le taux de pauvreté est le plus bas d'Europe : il s'établit à 10 % de la population, contre 16 % de moyenne pour l'Union européenne. Prague fait partie des villes mondiales Alpha - (villes globales) d'après le classement de l'université de Loughborough.</p>
				</div>
			</article>



			<div id="tableau">
				<p></p>
				<p></p>
				<p></p>
				<p></p>
				<img src="Image/flag.png" alt="Drapeau_Prague" width="52%"/>
				<p></p>
				<br /><caption> <strong>Quelques infos sur Prague</strong></caption>
				<p></p>
				<table>
					<tr>
						<td>Pays</td>
						<td>République Tchèque</td>
					</tr>
					<tr>
						<td>Province</td>
						<td>Bohême</td>
					</tr>
					<tr>
						<td>Population</td>
						<td>1 273 000 hab.</td>
					</tr>
					<tr>
						<td>Fuseau horaire</td>
						<td>UTC + 1</td>
					</tr>
				</table>
			</div>
		</section>

		<footer>
			<!on insere le bas de page>
			<?php include("footnote.php"); ?>
		</footer>
	</body>

</html>


	