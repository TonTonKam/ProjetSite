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
    return $db;
}

//creer profil utilisateur
function creerUtilisateur($nom, $prenom, $email, $enterPassword) {
    $db = gestionnaireDeConnexion();
    if ($db != null) {
        $nom = $db->quote($nom);
        $prenom = $db->quote($prenom);
        $email = $db->quote($email);
        $password = $db->quote($enterPassword);

        $req = "insert into utilisateur(nom, prenom, email, password  "
				. " values ($nom,$prenom,$email,$enterPassword);)";

        $db->exec($req);
    }
}

//fonction liste des utilisateurs



?>