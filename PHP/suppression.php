<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une formation</title>
    <link rel="stylesheet" href="../css/suppression.css">
</head>
<body>

    <?php include("includes/navBar.php"); ?>

    <h1>Supprimer une formation</h1>

    <div class="supprimer">

        <form action="" method="post">

            <label for="formation">Choisir une formation à supprimer</label>
            <select name="formation" id="formation">
                <option value="*">--- Choisir une formation ---</option>

                <?php 
                    if(isset($_SESSION['inter'])){
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
                    }
                    elseif(isset($_SESSION['salarier'])){
                        include("includes/connectionbdd.php");
                        $mail = $_SESSION['nom'];
                        $reqSQL = "SELECT idFormation, Libelle, nomStagiaire FROM formation WHERE nomStagiaire = '$mail'";
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
            <input type="submit" value="Supprimer" name="supprimer">
        </form>

    </div>

    <div class="confirmation">
        <?php
            // Vérification si le formulaire a été soumis
            if(isset($_POST['supprimer'])){
                $idFormation = $_POST['formation'];

                // Récupération des détails de la formation avant suppression
                $reqDetailsFormation = "SELECT Libelle, DateFormation, Horaire, Intervenant, Public, Objectifs, Contenu, coût, idDomaine FROM formation WHERE idFormation = $idFormation";
                $resultDetailsFormation = $connexion->query($reqDetailsFormation);
                $detailsFormation = $resultDetailsFormation->fetch();
                
                // Affichez les détails de la formation à supprimer
                echo "<h2>Confirmation de la suppression de la formation :</h2>";
                echo "<p>Libellé : " . $detailsFormation['Libelle'] . "</p>";
                echo "<p>Date de Formation : " . $detailsFormation['DateFormation'] . "</p>";


                // Formulaire de confirmation
                echo "<form action='includes/confirmationSuppression.php' method='post'>";
                echo "<input type='hidden' name='idFormation' value='$idFormation'>";
                echo "<input type='submit' value='Confirmer la suppression' name='confirmer_suppression'>";
                echo "</form>";
            }
            
        ?>
    </div>
    

</body>
</html>
