<html>

<?php
session_start
$listeUtilisateurs = listeUtilisateur();
foreach ($listeUtilisateurs as $lesUtilisateurs):
?>

	<p> Nom : <?php echo $lesUtilisateurs["nom"] ?> </p>
	<p> Prenom: <?php echo $lesUtilisateurs["prenom"] ?> </p>
	<p> Email : <?php echo $lesUtilisateurs["email"] ?> </p>
	<p> Mot de passe : ***** </p>

	<li>
	<a href="modificationEtablissement.php?numUtilisateur=<?php
	echo $lesUtilisateurs["id"] ?>">Modifier </a>
	</li>
	<li>
	<a href="detailEtablissement.php?numUtilisateur=<?php echo
	$lesUtilisateurs["id"] ?>">Detail </a>
	</li>
	<li>
	<a href="suppressionetablissement.php?numUtilisateur=<?php
	echo $lesUtilisateurs["id"] ?>">Suppression</a>
	</li>
<?php endforeach;?>

</html>
<?php


?>