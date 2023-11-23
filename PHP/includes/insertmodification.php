<?php

    include("connectionbdd.php");
    // Vérification si le formulaire de modification a été soumis
    if(isset($_POST['modifier'])){
        // Récupération des données du formulaire
        $idFormation = $_POST['idFormation'];
        $dateFormation = $_POST['dateFormation'];
        $intervenant = $_POST['intervenant'];
        $public = $_POST['public'];
        $objectifs = $_POST['objectifs'];
        $contenu = $_POST['contenu'];
        $cout = $_POST['cout'];

        // Mise à jour des informations dans la base de données
        $reqModification = "UPDATE formation SET DateFormation = '$dateFormation', Intervenant = '$intervenant', Public = '$public', Objectifs = '$objectifs', Contenu = '$contenu', Coût = '$cout' WHERE idFormation = $idFormation";

        $resultModification = $connexion->exec($reqModification);

        if($resultModification){
            echo "Modification réussie.";
        } else {
            echo "Erreur lors de la modification.";
        }
    }
?>