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

    <h1>Modifier une formation</h1>

    <div class="modifier">

        <form action="" method="post">

            <label for="formation">Choisir une formation à modifier</label>
            <select name="formation" id="formation">
                <option value="*">--- Choisir une formation ---</option>

                <?php 
                    include("includes/connectionbdd.php");

                    $reqSQL = "SELECT idFormation, Libelle FROM formation";
                    $result = $connexion->query($reqSQL);
                    $ligne = $result->fetch();

                    while ($ligne != false){
                        $idFormation = $ligne['idFormation'];
                        $Libelle = $ligne['Libelle'];

                        echo"<option value='$idFormation'>$Libelle</option>";

                        $ligne = $result->fetch();
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
        if(isset($_POST['ok'])){
            echo'<form action="includes/insertmodification.php" method="post">';
            echo'<input type="hidden" name="idFormation" value="<?php echo $idFormation ?>">';
            
            echo'<label for="dateFormation">Date de formation</label>';
            echo'<input type="date" name="dateFormation" value="<?php echo $dateFormation ?>">';
            echo'<br>';
            echo'<label for="intervenant">Intervenant</label>';
            echo'<input type="text" name="intervenant" value="<?php echo $intervenant ?>">';
            echo'<br>';
            echo'<label for="public">Public</label>';
            echo'<input type="text" name="public" value="<?php echo $public ?>">';
            echo'<br>';
            echo'<label for="objectifs">Objectifs</label>';
            echo'<input type="text" name="objectifs" value="<?php echo $objectifs ?>">';
            echo'<br>';
            echo'<label for="contenu">Contenu</label>';
            echo'<input type="text" name="contenu" value="<?php echo $contenu ?>">';
            echo'<br>';
            echo'<label for="cout">Coût</label>';
            echo'<input type="number" name="cout" value="<?php echo $cout ?>">';
            echo'<br>';
            echo'<input type="submit" value="Modifier" name="modifier">';
            echo'</form>';
        }
    ?>
    

</body>
</html>
