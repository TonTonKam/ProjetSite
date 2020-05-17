<?php 
include_once 'principale.php';
include_once 'fonction.php';

$utilisateur = lireUtilisateur($_SESSION['id']);
$_SESSION['status'] = $utilisateur['idStatus'];
$listFormConcerne = statusConcerne($utilisateur['idStatus']);

?>

	<div class="titre">
		<H1>Accueil</H1>
	</div>
	<nav>
		<h4><a href="consultation.profil.php">Votre profil<br /></a></h4>
		<!-- verifier le idStatus.status de idStatus.concerne -->
		<?php 
		foreach ($listFormConcerne as $concerne):
		$nomFormation = nomFormation($concerne["numFormation"]);
		?>
		<a href="type.de.formation.php?formation=<?php echo $concerne["numFormation"] ?>">
		Formation : <?php echo $nomFormation[0]['objectif'];?><br /></a>
		
	</nav>
		<?php endforeach; ?>
</html>
<?php
/* idée de ressorti
<?php foreach ($listFormConcerne as $concerne): ?>
<a href="type.de.formation.php?formation= <?php echo $concerne["numFormation"] ?>">
Formation <?php echo $concerne["numFormation"] ?><br /></a>
*/
?>