<html>

<?php 
session_start();
include_once 'principale.php';
include_once 'fonction.php';

// $listeUtilisateurs = listeUtilisateur();
// foreach ($listeUtilisateurs as $lesUtilisateurs):
$user = lireUtilisateur($_SESSION["id"]);
?>

	<p> Nom : <?php echo $user["nom"] ?> </p>
	<p> Prenom: <?php echo $user["prenom"] ?> </p>
	<p> Email : <?php echo $user["adresseMail"] ?> </p>
	<p> Mot de passe : ***** </p>

	<li>
	<a href="modificationEtablissement.php?numUtilisateur=<?php
	echo $user["id"] ?>">Modifier </a>
	</li>
	<li>
	<a href="detailEtablissement.php?numUtilisateur=<?php 
	echo $user["id"] ?>">Detail </a>
	</li>
	<li>
	<a href="suppressionetablissement.php?numUtilisateur=<?php
	echo $user["id"] ?>">Suppression</a>
	</li>
<?php // endforeach; ?>

</html>
