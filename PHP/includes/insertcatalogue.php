<?php
session_start();

include("connectionbdd.php");

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    if(isset($_POST["gestion"])){
        $_POST["gestion"] = 'gestion';
        $domaine = $_POST["gestion"];
        if(isset($_POST["info_collec"])){
            $_POST["info_collec"]='Soirée d information sur la convention collective nationale du sport';
            $formation=$_POST["info_collec"];
        }
        elseif(isset($_POST['connaissance'])){
            $_POST['connaissance']='Actualisation des connaissances sur la convention collective nationale du sport et la responsabilité des dirigeants';
            $formation = $_POST['connaissance'];
        }
        elseif(isset($_POST['compta'])){
            $_POST['compta'] = 'comptabilité';
            $formation = $_POST['compta'];
        }
        elseif(isset($_POST['partenariat'])){
            $_POST['partenariat'] = 'Recherche de partenariat';
            $formation = $_POST['partenariat'];
        }
    }
    elseif(isset($_POST["informatique"])){
        $_POST["informatique"]='informatique';
        $domaine = $_POST["informatique"];
        if(isset($_POST['out1'])){
            $_POST['out1'] = 'Outlook Niveau 1';
            $formation = $_POST['out1'];
        }
        elseif(isset($_POST['out2'])){
            $_POST['out2'] = 'Outlook Niveau 2';
            $formation = $_POST['out2'];
        }
        elseif(isset($_POST['PP2'])){
            $_POST['PP2'] = 'Power point Niveau 2';
            $formation = $_POST['PP2'];
        }
        elseif(isset($_POST['photo1'])){
            $_POST['photo1'] = 'Photoshop Niveau 1';
            $formation = $_POST['photo1'];
        }
        elseif(isset($_POST['photo2'])){
            $_POST['photo2'] = 'Photoshop Niveau 2';
            $formation = $_POST['photo2'];
        }
    }
    elseif(isset($_POST["developpement"])){
        $_POST["developpement"]='developpement';
        $domaine = $_POST["developpement"];
        if(isset($_POST['eco'])){
            $_POST['eco'] = 'Organiser une manifestation éco responsable';
            $formation = $_POST['eco']; 
        }
    }
    elseif(isset($_POST["Secourisme"])){
        $_POST["Secourisme"]='secourisme';
        $domaine =  $_POST["Secourisme"];
        if(isset($_POST['psc'])){
            $_POST['psc'] = 'Prévention et secours civique (PSC)';
            $formation = $_POST['psc'];
        }
        elseif(isset($_POST['premierSe'])){
            $_POST['premierSe'] = 'Bonnes pratiques et premiers secours';
            $formation = $_POST['premierSe'];
        }
    }
    elseif(isset($_POST["Communication"])){
        $_POST["Communication"]= 'communication';
        $domaine = $_POST["Communication"];
        if(isset($_POST['reu'])){
            $_POST['reu'] = 'Conduite de réunion';
            $formation = $_POST['reu'];
        }
        elseif(isset($_POST['presse'])){
            $_POST['presse'] = 'Communiquer avec la presse';
            $formation = $_POST['presse'];
        }
        elseif(isset($_POST['etrangere']))
        $_POST['etrangere'] = 'Langues étrangères';
        $formation = $_POST['etrangere'];
    } 

    $date = $_POST["date"];
    $horaire = $_POST["horaire"];
    $lieu = $_POST["lieu"];
    $intervenant = $_POST["intervenant"];
    $public = $_POST["public"];
    $objectifs = $_POST["objectifs"];
    $contenu = $_POST["contenu"];
    $cout = $_POST["cout"];
    $dateLimite = $_POST["dateLimite"];
    $libelle = $formation;
    $idDomaine = $domaine;
    var_dump($domaine);
    var_dump($formation);

    $reqSQL = "INSERT INTO formation (`idFormation`, `Libelle`, `DateFormation`, `Horaire`, `Intervenant`, `Public`, `Objectifs`, `Contenu`, `coût`, `idDomaine`) VALUES (NULL, '$libelle', '$date', '$horaire', '$intervenant', '$public', '$objectifs', '$contenu', '$cout','$idDomaine')";

    $connexion->exec($reqSQL);
    echo "Insertion réussie.";

}
?>