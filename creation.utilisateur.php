<?php
//B creationEtablissement.traitement.php

session_start();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['entrerPassword'];

//$bd = gestionnaireDeConnexion();
$bd = new PDO('mysql:host=localhost;dbname=dbbm2l', 'root', '');
$req= $bd->prepare("INSERT INTO utilisateur (`nom`, `prenom`, `email`, `password`) VALUES ($nom, $prenom, $email, $password);") ;
$req->execute() ;
echo$req->errorInfo()[2]."<br/>" ;
/*
if (isset($_REQUEST)) {
    $nom = $_REQUEST['$nom'];
    $prenom = $_REQUEST['$prenom'];
    $email = $_REQUEST['$email'];
    $password = $_REQUEST['$enterPassword'];
    ;

    creerUtilisateur($nom, $prenom, $email, $password);
}
*/

header("Location:consultation.profil.php")

?>