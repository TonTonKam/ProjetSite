<!DOCTYPE html>
<html>
<?php include_once 'fonction.php'; ?>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
	
	<!-- top page -->
    <body >
        <div id="content">
    
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                if (isset($_GET['deconnexion'])) { 
                   if($_GET['deconnexion']==true) {
                      session_unset();
                      header("location:index.php");
                   }
                }
                else if ($_SESSION['id'] !== "") {
                    $user = getUser($_SESSION['id']);
                    // afficher un message
                    echo "<br>Bonjour {$user['nom']} vous êtes connectés";
                }
                /*
                else if ($_SESSION['username'] !== "") {
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user vous êtes connectés";
                }
                */
            ?>
            
        </div>
