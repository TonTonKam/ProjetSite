<?php 
include_once 'principale.php';
include_once 'fonction.php';

$utilisateur = lireUtilisateur($_SESSION['id']);
$_SESSION['status'] = $utilisateur['idStatus'];
$listeFormations = statusConcerne($utilisateur['idStatus']);
?>

<html>
	<body>
	<div class="titre">
		<H1>Accueil</H1>
	</div>
		<nav>
			<a href="consultation.profil.php">Votre profil<br /></a>
			<!-- verifier le idStatus.status de idStatus.concerne -->
			
			<a href="type.de.formation.php??>">Formations</a>
			
		</nav>

<?php
/* idée de ressorti
<?php foreach ($listeFormations as $formations): ?>
<a href="type.de.formation.php?formation= <?php echo $formations["numFormation"] ?>">
Formation <?php echo $formations["numFormation"] ?><br /></a>
*/
?>