S<?php
session_start();
include_once 'fonction.php';
if(isset($_POST['username']) && isset($_POST['password']))
{
   $db = gestionnaireDeConnexionMysqli();

   // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
   // pour éliminer toute attaque de type injection SQL et XSS
   $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
   $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
   if($username !== "" && $password !== "")
   {
      $requete = "SELECT nom, idUtilisateur FROM utilisateur where 
         nom = '".$username."' and password = '".$password."' ";
      $exec_requete = mysqli_query($db, $requete);
      $reponse      = mysqli_fetch_array($exec_requete);

      if (sizeof($reponse) > 0) // nom d'utilisateur et mot de passe correctes
      {
         $_SESSION['id'] = $reponse["idUtilisateur"];
         header('Location: accueil.php');
      }
      else
      {
         header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
      }
   }
   else
   {
      header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
   }
}
else
{
   header('Location: index.php?connexion');
}
mysqli_close($db); // fermer la connexion
?>