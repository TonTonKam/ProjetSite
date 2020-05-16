<?php
include 'fonction.php';
include_once 'principale.php';

?>
<html>
    <body>
    <div class="content">
        <?php
        $_SESSION['id'];
        include_once 'principale.php';
        include_once 'fonction.php';
        //ajouter session
        //ajouter sinscrire
        ?>
            <H1> Liste des formations </h1>
        <?php
        $listeFormations = listeFormation();
        foreach ($listeFormations as $formation):

        ?>
        <div class="present">
            <p> Objectif de la formation : <?php echo $formation["objectif"] ?> </p>
            <p> Cout de la formation : 
            <?php 
                if($formation["couts"] != null){
                    echo $formation["couts"];
                } else{
                    echo "Gratuit";
                }
            ?> </p>
            <p> Titre de la formation : <?php echo $formation["titre"] ?> </p>
            <p> Session :  </p>
            <p> ---------- </p>
        </div>
        <?php endforeach;?>

    </div>