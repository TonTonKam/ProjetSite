<?php
include 'fonction.php';
include_once 'principale.php';

if(isset($_GET["formation"])){
    $id = $_GET["formation"];
    $formation = lireFormation($id);
}

?>

    <div class="content">

        <h1> Liste des formations </h1>

        <div class="present">
            <p><h3> Objectif de la formation : <?php echo $formation["objectif"]; ?> </h3></p>
            <p> Cout de la formation : 
            <?php 
                if($formation["couts"] != null){
                    echo $formation["couts"];
                } else{
                    echo "Gratuit";
                }
            ?> </p>
            <p> Titre de la formation : <?php echo $formation["titre"]; ?> </p>
            <p><a href="descriptif.session.php?numSession=<?php echo $id ?>">Voir les sessions</a> </p>
        </div>
        
    </div>