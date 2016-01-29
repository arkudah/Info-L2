
<h3>Que faire à Prague?</h3>
				<ul>
					<li><a href="testp2.html">Que voir?</a></li>
					<li><a href="testp3.html">Où manger?</a></li>
					<li><a href="testp4.html">Où boire un coup? </a></li>
					<li><a href="testp5.html">Où sortir?</a></li>
				</ul>

<a href="connection.php">
	<h3>Espace Premium</h3>
</a>

<?php

	if (isset($_SESSION['connection'])) {
		if ($_SESSION['connection']==1) {
			echo "<h3>Salut t'es connecté</h3>";
			echo "<div id=\"deco\"><a href=\"logout.php\"> Deconnection </a><div>";
		}
	}
?>