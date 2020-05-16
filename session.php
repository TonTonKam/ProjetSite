<?php
include_once 'fonction.php';
include_once 'principale.php';
session_start();

$session = listeSession()
$lieu = listeLieu($session["idLieu"]);
$intervenant = listeIntervenant($session["idIntervenant"]);
?>

<div class=