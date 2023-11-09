<?php
require 'connectionbdd.php';
session_start();
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération de l'adresse e-mail et du mot de passe
    $login = $_POST['identifiant'];
    $mdp = $_POST['mdp'];

    // Requête de sélection
    $sql = "SELECT * FROM connection WHERE login = :login ";

    // Préparation de la requête
    $stmt = $connexion->prepare($sql);

    // Liaison des paramètres
    $stmt->bindParam(':login', $login);

    // Exécution de la requête
    $stmt->execute();

    // Récupération du résultat
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump ($user);
    
    // Vérification du résultat
    if ($user) {
        // L'utilisateur existe 
        // Vérification du mot de passe
        if (($user['mdp'])==($mdp)) {
            // Le mot de passe correspond

            // Vous pouvez accéder aux valeurs de l'utilisateur
            $_SESSION['nom'] = $user['login']; // Stockage du nom dans la variable de session
            $_SESSION['prenom'] = $user['mdp']; // Stockage du prénom dans la variable de session
            $_SESSION['connecte'] = true;
            if(isset($_POST['salarier'])){
                header("Location: inscription.html");
                exit;
            }
            elseif(isset($_POST['inter'])){
                header("Location: #");
                exit;

            }
        } else {
            //redirection vers la page de connexion 
            header("Location: connection.php?error=" ).  $errorMessage;
            exit;

        }
    } else {
            //redirection vers la page de connexion 
            header("Location: connection.php?error=") .  $errorMessage;
            exit;
    }
}
?>