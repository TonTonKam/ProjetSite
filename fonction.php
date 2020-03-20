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
	}else{
		echo "connection ok a la bdd";
	}
    return $db;
}

function gestionnaireDeConnexionPdo() {
    $pdo = null;
    try {
        $pdo = new PDO(
                'mysql:host=localhost;dbname=dbbm2l', 'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        $messageErreur = $err->getMessage();
        error_log($messageErreur, 0);
    }
    return $pdo;
}

//creer profil utilisateur
function creerUtilisateurMysqli($nom, $prenom, $email, $enterPass) {
    $db = gestionnaireDeConnexionMysqli();
    if ($db != null) {

        $req = "insert into utilisateur(nom, prenom, adresseMail, password) values ('$nom', '$prenom', '$email','$enterPass')";

        $requete = $db->query($req);
    }else {
		echo "Une erreur est survenue.";  
	}
	session_start();
	$_SESSION['username'] = $nom;
	return $requete;
}

function creerUtilisateurPdo($nom, $prenom, $email, $enterPass) {
    $pdo = gestionnaireDeConnexionPdo();
    if ($pdo != null) {

        $req = "insert into utilisateur(nom, prenom, email, password) values ('$nom', '$prenom', '$email','$enterPass')";

        $requete = $pdo->query($req);
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