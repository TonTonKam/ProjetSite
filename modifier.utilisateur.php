<?php
include_once 'principale.php';
include_once 'fonction.php';

if(isset($_GET["numUtilisateur"])){
    $id = $_GET["numUtilisateur"];
    $utilisateur = lireUtilisateur($id);
    $nom = $utilisateur['$nom'];
    $prenom = $utilisateur['$prenom'];
    $email = $utilisateur['$email'];
    $status = $utilisateur['$status'];
}else{
	header("location: consultation.profil.php");
}
?>
    <div>
    <form method='post' action='modification.utilisateur.traitement.php'>
    
        <label><b>Nom</b></label>
        <input type="text" class="form-control" value="" name="nom"  
                maxlength="45" pattern="^[-'çéèùa-zA-Z\s]{1,45}$" title="Saisir 1 caractères au minimum" required>

        <label><b>Prenom</b></label>
        <input type="text" class="form-control" value="" name="prenom"  
                maxlength="45" pattern="^[-'çéèùa-zA-Z\s]{1,45}$" title="Saisir 1 caractères au minimum" required>

        <label><b>Email</b></label>
        <input type="email" class="form-control" value=""  name="email" 
                title="Saisir un email valide" maxlength="70"  />
        
        <label><b>Status</b></label>
		<select name="status">
		    <option value="autre">Autre</option>
			<option value="1">Benevole</option>
			<option value="2">Salarier</option>
		</select>
    </div>
</html>
