<html>

<?php 
include_once 'principale.php';
include_once 'fonction.php';

// $listeUtilisateurs = listeUtilisateur();
// foreach ($listeUtilisateurs as $lesUtilisateurs):
$user = lireUtilisateur($_SESSION["id"]);

?>
<h1> Profil </h1>
<div class="titre">
	<p> Nom : <?php echo $user["nom"] ?> </p>
	<p> Prenom: <?php echo $user["prenom"] ?> </p>
	<p> Email : <?php echo $user["adresseMail"] ?> </p>
	<p> Mot de passe : ***** </p>


	<li>
	<a href="modifier.utilisateur.php?numUtilisateur=<?php echo $user["id"] ?>">Modifier </a>
	</li>
	<li>
	<a href="modifier.utilisateur.php?numUtilisateur=<?php echo $user["id"] ?>">Suppression</a>
	</li>
</div>
<?php // endforeach; ?>

</html>