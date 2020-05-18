
<?php
include_once 'principale.php';
include_once 'fonction.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$idUtilisateur = $_SESSION['id'];
var_dump($idUtilisateur);

//verification de l'utilisateur
if($_SESSION['id'] != null){
    updateUtilisateur($idUtilisateur, $nom, $prenom, $email);
}else{
    echo "idUtilisateur introuvable.";
}

//header('Location:consultation.profil.php');
?>