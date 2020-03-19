<?php
//connexion PDO
//connexion à la base de données
function gestionnaireDeConnexion() {
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
	}else{
		echo "connection ok";
	}
    return $db;
}

//creer profil utilisateur
function creerUtilisateur($nom, $prenom, $email, $enterPass) {
    $db = gestionnaireDeConnexion();
    if ($db != null) {

        $req = "insert into utilisateur(nom, prenom, email, password  "
				. " values ('$nom', '$prenom', '$email','$enterPass');)";

        $bd->query($req);
    }else {
		echo "Une erreur est survenue.";  
	}
	session_start();
	$_SESSION['username'] = $nom;
	return $requete;
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

//fonction liste des utilisateurs
function listeUtilisateurs() {
    $lesUtilisateurs = array();
    $bd = gestionnaireDeConnexion();
    if ($bd != NULL) {
        $req = "select * from utilisateur order by nom";
        $pdoStatement = $bd->query($req);
        $lesUtilisateurs = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesUtilisateurs;
}


?>