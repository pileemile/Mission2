<?php
    include("connectionbdd.php");

    if(isset($_POST['confirmer_suppression'])){
        $idFormation = $_POST['idFormation'];

        // Suppression de la formation
        $reqSuppression = "DELETE FROM formation WHERE idFormation = $idFormation";

        try {
            $connexion->exec($reqSuppression);
            echo "Suppression réussie.";
        } catch (PDOException $e) {
            echo "Erreur de suppression : " . $e->getMessage();
        }
    }
?>
