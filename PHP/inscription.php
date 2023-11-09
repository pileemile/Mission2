<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inscription.css">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <form action="/includes/inscription.php" method="post">

        <h3>-> Les coordonées de votre association </h3>
        <br><br>
        <label for="">Le nom de l'association</label>
        <input type="text" name="nomAssociatiion" id="nomAssociatiion">
        <br>
        <label for="">Votre n°Icon à Uniformation</label>
        <input type="number" name="numIcon" id="numIcon">
        <br>
        <label for="">L'interlocuteur de votre association</label>
        <br>
        <label for="">Nom</label>
        <input type="text" name="nomInterlocuteur" id="nomInterlocuteur">
        <br>
        <label for="">Prénom</label>
        <input type="text" name="prenomInterlocuteur" id="prenomInterlocuteur">
        <br>
        <label for="">Courriel</label>
        <input type="email" name="courriel" id="courriel">
        <br>
        <label for="">Tél</label>
        <input type="tel" name="tel" id="tel">
        <label for="">Fax</label>
        <input type="tel" name="fax" id="fax">
        
        <h3>-> Le stagiaire</h3>
        <br><br>
        <label for="">Nom</label>
        <input type="text" name="nomStagiare" id="nomStagiare">
        <br>
        <label for="">Prénom</label>
        <input type="text" name="prenomStagiaire" id="prenomStagiaire">
        <br>
        <label for="">Adresse</label>
        <input type="text" name="adresse" id="adresse">
        <br>
        <label for="">Code postal</label>
        <input type="number" name="codePostal" id="codePostal">
        <br>
        <label for="">Ville</label>
        <input type="text" name="ville" id="ville">
        <br>
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="">Statut</label>
        <label for="">Salarié</label>
        <input type="radio" name="statut" id="statut">
        <label for="">Bénévole</label>
        <input type="radio" name="statut" id="statut">
        <br>
        <label for="">Fonction</label>
        <input type="text" name="Fonction" id="fonction">

    </form>

</body>
</html>