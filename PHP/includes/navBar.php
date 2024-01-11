<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>

    <div class="navbar">
        <a href="#home">Accueil</a>
        <?php if(isset($_SESSION['inter']) && $_SESSION['inter']) {
            echo '<a href="historiser.php">Historique</a>';
        } ?>
        <?php if(isset($_SESSION['inter']) && $_SESSION['inter']) {
            echo '<a href="consulter.php">Consulter catalogue</a>';
        } ?>

        <a href="catalogue.php">Créer catalogue</a>
        <a href="modification.php">Modifier catalogue</a>
        <a href="suppression.php">Supprimer catalogue</a>
        <a href="includes/deconnexion.php">Déconnexion</a>
    </div>
</body>
</html>
