<?php
include 'fonction.php';
include_once 'principale.php';

if(isset($_GET["numSession"])){
    $idFormation = $_GET["numSession"];
    $sessionForm = listeSession($idFormation);
    $sessionTab = $sessionForm[0];
    $_SESSION['numSession'] = $sessionTab['numSession'];
}

//ajouter sinscrire
?>
    <div class="content">

        <h1> Session </h1>
        <div class="present">
            <h3><p>Date : </h3></p>
            <p> Inscription avant : <?php echo $sessionTab['dateLimiteInsc']; ?></p>
            <p> Date de formation : <?php echo $sessionTab['dateSession']; ?></p>
            <p> Date de fin formation : <?php echo $sessionTab['dateDeFin']; ?></p>

            <p><h3> Intervenant : </h3></p>
            <?php 
            $intervenant = lireIntervenant($sessionTab['idIntervenant']); 
            ?>
            <p> Nom : <?php echo $intervenant['nom']; ?></p>
            <p> Prenom : <?php echo $intervenant['prenom']; ?></p>
            <p> Titre : <?php echo $intervenant['titre']; ?></p>

            <p><h3> Lieu de formation : </h3></p>
            <?php 
            $lieu = lireLieu($sessionTab['idLieu']);
            ?>
            <p> Nom : <?php echo $lieu['nom']; ?></p>
            <p> Adresse : <?php echo $lieu['adresse']; ?></p>
            <p> Code postal : <?php echo $lieu['codePostal']; ?></p>
            <p> Ville : <?php echo $lieu['ville']; ?></p>
            <p> Telephone : <?php echo $lieu['telephone']; ?></p>

            <p> nombre de Place possible: <?php echo $sessionTab['nbPlace']; ?></p>
            
            <p><h4>S'inscrire</h4></p>
            <a href="inscrire.php" class="bouton1">S'inscrire</a>
        </div>
        
    </div>