<?php
session_start();

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $domaine = $_POST["gestion"] ?? $_POST["informatique"] ?? $_POST["developpement"] ?? $_POST["Secourisme"] ?? $_POST["Communication"] ?? "";

    $formation = $_POST[$domaine] ?? "";

    $date = $_POST["date"] ?? "";
    $horaire = $_POST["horaire"] ?? "";
    $lieu = $_POST["lieu"] ?? "";
    $intervenant = $_POST["intervenant"] ?? "";
    $public = $_POST["public"] ?? "";
    $objectifs = $_POST["objectifs"] ?? "";
    $contenu = $_POST["contenu"] ?? "";
    $cout = $_POST["cout"] ?? "";
    $dateLimite = $_POST["dateLimite"] ?? "";

    
}
?>