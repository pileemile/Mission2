<?php

    include("includes/connectionbdd.php");

    //Association
    $nomAssociation = $_POST['nomAssociatiion'];
    $numIcon = $_POST['numIcon'];

    //Interlocuteur
    $nomInterlocuteur = $_POST['nomInterlocuteur'];
    $prenomInterlocuteur = $_POST['prenomInterlocuteur'];
    $courrielInterlocuteur = $_POST['courriel'];
    $tel = $_POST['tel'];
    $fax = $_POST['fax'];

    //Stagiaire
    $nomStagiaire = $_POST['nomStagiare'];
    $prenomStagiaire = $_POST['prenomStagiaire'];
    $adresse = $_POST['adresse'];
    $codePostal = $_POST['codePostal'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $statut = $_POST['statut'];
    $fonction = $_POST['fonction'];

    
?>