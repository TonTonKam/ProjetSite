<?php
//connexion PDO
//connexion à la base de données
function gestionnaireDeConnexionMysqli() {
    $db = null;
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'dbbm2l';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('pas de connexion to database');
	if (mysqli_connect_errno()) {
    echo "Echec de la connexion: " . mysqli_connect_error();
    exit();
	}
    return $db;
}

//creer profil utilisateur
function creerUtilisateurMysqli($nom, $prenom, $email, $enterPass, $status) {
    $db = gestionnaireDeConnexionMysqli();
    if ($db != null) {
		$req = "INSERT INTO utilisateur(nom, prenom, adresseMail, password, idStatus) VALUES ('$nom', '$prenom', '$email','$enterPass', '$status')";
		$requete = mysqli_query($db, $req);
    }else {
		echo "Une erreur est survenue.";
	}
	session_start();
	$_SESSION['nom']   = $nom;
	$_SESSION['email'] = $email;

	return $requete;
}

function lireUtilisateur($id) {
	$db = gestionnaireDeConnexionMysqli();
    if ($db != NULL) {
		$req 		  = "select * from utilisateur where idUtilisateur = $id";
		$exec_requete = mysqli_query($db, $req);
		$user         = mysqli_fetch_array($exec_requete);
	}
    return $user;
}

function statusConcerne($idStatus) {
	$db = gestionnaireDeConnexionMysqli();
    if ($db != NULL) {
		$req 		  = "SELECT numFormation FROM concerne WHERE idStatus = $idStatus";
		$exec_requete = mysqli_query($db, $req);
		$formations   = mysqli_fetch_all($exec_requete, MYSQLI_ASSOC);
	}
    return $formations;
}

function nomFormation($numFormation) {
	$db = gestionnaireDeConnexionMysqli();
	if ($db != NULL) {
		$req		   = "SELECT objectif FROM formation WHERE numFormation = $numFormation";
		$exec_requete  = mysqli_query($db, $req);
		$lesFormations = mysqli_fetch_all($exec_requete, MYSQLI_ASSOC);
	}
	return $lesFormations;
}
function lireFormation($numFormation){
	$db = gestionnaireDeConnexionMysqli();
	if ($db != NULL) {
		$req		   = "SELECT * FROM formation WHERE numFormation = $numFormation";
		$exec_requete  = mysqli_query($db, $req);
		$laFormation = mysqli_fetch_array($exec_requete, MYSQLI_ASSOC);
	}
	return $laFormation;
}

function listeSession($numFormation){
	$db = gestionnaireDeConnexionMysqli();
	if ($db != NULL) {
		$req 		  = "SELECT * FROM session WHERE numformation = $numFormation";
		$exec_requete = mysqli_query($db, $req);
		$listeSession = mysqli_fetch_all($exec_requete, MYSQLI_ASSOC);
	}
	return $listeSession;
}

function lireLieu($idLieu){
	$db = gestionnaireDeConnexionMysqli();
	if ($db != NULL) {
		$req 		  = "SELECT * FROM lieu WHERE idLieu = $idLieu";
		$exec_requete = mysqli_query($db, $req);
		$lieu 		  = mysqli_fetch_array($exec_requete, MYSQLI_ASSOC);
	}
	return $lieu;
}

function lireIntervenant($idIntervenant){
	$db = gestionnaireDeConnexionMysqli();
	if ($db != NULL) {
		$req 		  = "SELECT * FROM intervenant WHERE idIntervenant = $idIntervenant";
		$exec_requete = mysqli_query($db, $req);
		$intervenant = mysqli_fetch_array($exec_requete, MYSQLI_ASSOC);
	}
	return $intervenant;
}

/*
//chercher l'id
function rechercheId($nom, $email) {
	$db = gestionnaireDeConnexionMysqli();
	if ($db != null) {
		$req = "SELECT idUtilisateur FROM utilisateur WHERE nom = $nom, email = $email";
		$exec_requete = mysqli_query($db, $req);
		$user = mysqli_fetch_array($exec_requete);
	}else {
		echo "Une erreur est survenue."; 
	}
	return $user;
}

//fonction permettant d'avoir les informations de l'utisateur
// Execution de la requête sql avec $db->query()
	$succes = $db->query($sql);
	if ($succes) {
		echo "Requete bien envoye";
	} 
	else {
		echo "Une erreur est survenue.";  
	}
// Requête simple
	$sql = "INSERT INTO eleve (nom, age) VALUES ('Bob', 19)";
	// Requête dynamique
	$sql = "INSERT INTO eleve (nom, age) VALUES ('" . $votre_nom . "', " . $votre_age . ")";
	// Requête dynamique avec variables protégées
	$sql = "INSERT INTO eleve (nom, age) VALUES ('" . $db->real_escape_string($votre_nom) . "', " . $db->real_escape_string($votre_age) . ")";

	// Execution de la requête sql avec $db->query()
	$succes = $db->query($sql);
*/

?>