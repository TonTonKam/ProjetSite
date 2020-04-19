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

        $req = "insert into utilisateur(nom, prenom, adresseMail, password, status) values ('$nom', '$prenom', '$email','$enterPass', '$status')";

        $requete = $db->query($req);
    }else {
		echo "Une erreur est survenue.";  
	}
	session_start();
	$_SESSION['username'] = $nom;
	$_SESSION['status'] = $status;
	return $requete;
}
//fonction permettant d'avoir les informations de l'utisateur
function lireUtilisateur($id) {
	$db = gestionnaireDeConnexionMysqli();
    if ($db != NULL) {
		$req = "select * from utilisateur where idUtilisateur = $id";
		$exec_requete = mysqli_query($db, $req);
		$user         = mysqli_fetch_array($exec_requete);
    }
    return $user;
}

/*
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