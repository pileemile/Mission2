<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modification.css">
    <title>Modifier une formation</title>
</head>
<body>

    <?php include("includes/navBar.php"); ?>

    <h1>Historiques des formations</h1>

    <div class="modifier">

        <form action="" method="post">

            <label for="formation">Formations</label>
            <select name="formation" id="formation">
                <option value="*">--- Choisir une formation ---</option>

                <?php 
                if(isset($_SESSION['inter'])){
                    include("includes/connectionbdd.php");
                    $dateAujourdhui = date('Y-m-d');
                    $reqSQL = "SELECT idFormation, Libelle FROM formation WHERE DateFormation < '$dateAujourdhui'";
                    $result = $connexion->query($reqSQL);
                    $ligne = $result->fetch();

                    while ($ligne != false){
                        $idFormation = $ligne['idFormation'];
                        $Libelle = $ligne['Libelle'];

                        echo"<option value='$idFormation'>$Libelle</option>";

                        $ligne = $result->fetch();
                    }
                }
                elseif(isset($_SESSION['salarier'])){
                    include("includes/connectionbdd.php");
                    $dateAujourdhui = date('Y-m-d');
                    $mail = $_SESSION['nom'];
                    $reqSQL = "SELECT idFormation, Libelle, nomStagiaire FROM formation WHERE nomStagiaire = '$mail' AND  DateFormation < '$dateAujourdhui'";
                    $result = $connexion->query($reqSQL);
                    $ligne = $result->fetch();

                    while ($ligne != false){
                        if($mail === $ligne['nomStagiaire']){
                            $idFormation = $ligne['idFormation'];
                            $Libelle = $ligne['Libelle'];

                        echo"<option value='$idFormation'>$Libelle</option>";

                        $ligne = $result->fetch();
                        }
                        
                    }
                }
                else{
                    echo"aucune formation";
                }
                ?>
            </select>
            <input type="submit" value="OK" name="ok">
        </form>

    </div>

    <?php
        // Vérification si le formulaire a été soumis
        if(isset($_POST['ok'])){
            $idFormation = $_POST['formation'];

            // Récupération de la date de formation
            $reqDateFormation = "SELECT DateFormation FROM formation WHERE idFormation = $idFormation";
            $resultDateFormation = $connexion->query($reqDateFormation);
            $ligneDateFormation = $resultDateFormation->fetch();
            $dateFormation = $ligneDateFormation['DateFormation'];

            // Récupération de l'intervenant
            $reqIntervenant = "SELECT Intervenant FROM formation WHERE idFormation = $idFormation";
            $resultIntervenant = $connexion->query($reqIntervenant);
            $ligneIntervenant = $resultIntervenant->fetch();
            $intervenant = $ligneIntervenant['Intervenant'];

            // Récupération du public
            $reqPublic = "SELECT Public FROM formation WHERE idFormation = $idFormation";
            $resultPublic = $connexion->query($reqPublic);
            $lignePublic = $resultPublic->fetch();
            $public = $lignePublic['Public'];

            // Récupération des objectifs
            $reqObjectifs = "SELECT Objectifs FROM formation WHERE idFormation = $idFormation";
            $resultObjectifs = $connexion->query($reqObjectifs);
            $ligneObjectifs = $resultObjectifs->fetch();
            $objectifs = $ligneObjectifs['Objectifs'];

            // Récupération du contenu
            $reqContenu = "SELECT Contenu FROM formation WHERE idFormation = $idFormation";
            $resultContenu = $connexion->query($reqContenu);
            $ligneContenu = $resultContenu->fetch();
            $contenu = $ligneContenu['Contenu'];

            // Récupération du coût
            $reqCout = "SELECT Coût FROM formation WHERE idFormation = $idFormation";
            $resultCout = $connexion->query($reqCout);
            $ligneCout = $resultCout->fetch();
            $cout = $ligneCout['Coût'];
        }
    ?>

    <?php
        if (isset($_POST['ok'])) {
            echo '<form action="includes/insertmodification.php" method="post">';
            echo '<input type="hidden" name="idFormation" value="' . $idFormation . '">';

            echo '<label for="dateFormation">Date de formation</label>';
            echo '<input type="date" name="dateFormation" value="' . $dateFormation . '">';
            echo '<br>';
            echo '<label for="intervenant">Intervenant</label>';
            echo '<input type="text" name="intervenant" value="' . $intervenant . '">';
            echo '<br>';
            echo '<label for="public">Public</label>';
            echo '<input type="text" name="public" value="' . $public . '">';
            echo '<br>';
            echo '<label for="objectifs">Objectifs</label>';
            echo '<input type="text" name="objectifs" value="' . $objectifs . '">';
            echo '<br>';
            echo '<label for="contenu">Contenu</label>';
            echo '<input type="text" name="contenu" value="' . $contenu . '">';
            echo '<br>';
            echo '<label for="cout">Coût</label>';
            echo '<input type="number" name="cout" value="' . $cout . '">';
            echo '<br>';
            echo '</form>';
        }
    ?>
    


</body>
</html>
