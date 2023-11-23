<?php
    include('connectionbdd.php');

    $libelle = $_POST['formation'];
    $date = $_POST['date'];
    $horaire = $_POST['horaire'];
    $lieu = $_POST['intervenant'];
    $public = $_POST['public'];
    $objectifs = $_POST['objectifs'];
    $contenu = $_POST['contenu'];
    $cout = $_POST['cout'];
    $dateLimite =$_POST['dateLimite'];

    if(isset($_POST['Valider'])){
        $reqSQL = "INSERT INTO `formation`(`idFormation`, `Libelle`, `DateFormation`, `Horaire`, `Intervenant`, `Public`, `Objectifs`, `Contenu`, `coût`, `idDomaine`) VALUE (NULL, '$libelle', '$date', '$horaire', '$lieu', '$public', '$objectifs', '$contenu', '$cout', '$dateLimite')";

        $connexion->exec($reqSQL);
    }

    
?>