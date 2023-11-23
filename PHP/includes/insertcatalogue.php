<?php
    include("connectionbdd.php");
    session_start();
        $libelleDomaine = $_SESSION['domaine'];
        var_dump($libelleDomaine);
        header("Location: ../catalogue.php" );
        if (isset($_SESSION['domaine'])){
            $libelle = $_POST['formation'];
            $date = $_POST['date'];
            $horaire = $_POST['horaire'];
            //$lieu = $_POST['lieu'];
            $intervenant = $_POST['intervenant'];
            $public = $_POST['public'];
            $objectifs = $_POST['objectifs'];
            $contenu = $_POST['contenu'];
            $cout = $_POST['cout'];
            //$dateLimite = $_POST['dateLimite'];
            $idDomaine = $_POST['domaine'];
    
            //$reqSQL = "INSERT INTO formation (`idFormation`, `Libelle`, `DateFormation`, `Horaire`, `Intervenant`, `Public`, `Objectifs`, `Contenu`, `coût`, `idDomaine`) VALUES (NULL, '$libelle', '$date', '$horaire', '$intervenant', '$public', '$objectifs', '$contenu', '$cout','$idDomaine')";
    
            //$connexion->exec($reqSQL);
            //echo "Insertion réussie.";
        }
       
    
    
?>