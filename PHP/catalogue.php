<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
</head>
<body>
    <h1>Creer une formation</h1>

    <form action="" method="post">

        <label for="">Choisir un domaine</label>
        <select name="domaine" id="domaine">
            <option value="*">--- Choisir un domaine ---</option>
            <?php
                include("includes/connectionbdd.php");

                $reqSQL = "SELECT idDomaine, NomDomaine FROM domaine";
                $result = $connexion->query($reqSQL);
                $ligne = $result->fetch();

                while ($ligne != false){
                    $idDomaine = $ligne['idDomaine'];
                    $domaine = $ligne['NomDomaine'];

                    echo"<option value='$idDomaine'>$domaine</option>";

                    $ligne = $result->fetch();
                }
            ?>

        </select>
        <br>
        <label for="">Choisir une formation</label>
        <select name="formation" id="formation">
            <option value="">Soirée d'information sur la convention collective nationale du sport</option>
            <option value="">Actualisation des connaissances sur la convention collective nationale du sport et la responsabilité des dirigeants</option>
            <option value="outlook">Outlook</option>
            <option value="powerPoint">Power point</option>
            <option value="photoshop">Photoshop</option>
            <option value="">Organiser une manifestation éco responsable</option>
            <option value="">Prévention et secours civique (PSC)</option>
            <option value="">Bonnes pratiques et premiers secours</option>
            <option value="">Conduite de réunion</option>
            <option value="">Communiquer avec la presse</option>
            <option value="">Langues étrangères</option>
        </select>

        <label for="">Date</label>
        <input type="date" name="date" id="date">
        <br>
        <label for="">Horaire</label>
        <input type="time" name="horaire" id="horaire">
        <br>
        <label for="">Lieu</label>


    </form>

</body>
</html>