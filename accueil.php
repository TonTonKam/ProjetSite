<?php 
session_start();
include_once 'principale.php';
include_once 'fonction.php';
?>
<html>
	<body>
	<div class="titre">
		Accueil
	</div>
		<nav>
        <a href="consultation.profil.php">Votre profil</a>
         
	<?php 
	if($_SESSION['status']== "1") : ?>

		<a href="type.de.formations.php">Les formations proposées</a>
		</nav>

	<?php endif; ?>