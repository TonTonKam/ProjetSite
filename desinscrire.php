<?php
include_once 'principale.php';
include_once 'fonction.php';

$idUser = $_SESSION['id'];
$numSession = $_SESSION['numSession'];

if($idUser != null && $numSession != null){
    desinscrire($idUser, $numSession);
    header("Location:consultation.profil.php");
}else{
    echo "_session vide ou déjà utilisé";
}
?>