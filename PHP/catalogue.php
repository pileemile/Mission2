<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="stylesheet" href="../css/catalogue.css">
</head>
<body>
    <h1>Creer une formation</h1>

    <div class="formation">
      
    
       
    <form method="post" id="domaineForm" action="includes/insertcatalogue.php">
    <label for="">Choisir un domaine</label>
    <div class="radio-group">
            <label for="gestion1"><input type="radio" name="gestion" id="gestion1"> Gestion </label>
            <label for="informatique1"><input type="radio" name="informatique" id="informatique1"> informatique </label>
            <label for="developpement1"><input type="radio" name="developpement" id="developpement1"> développement durable</label>
            <label for="Secourisme1"><input type="radio" name="Secourisme" id="Secourisme1"> Secourisme</label>
            <label for="Communication1"><input type="radio" name="Communication" id="Communication1"> Communication</label>
        </div>
<br>  
       <label for="">Choisir une formation</label>
           <div class="choix_formation">
                <div class="gestion">
                    <label for="">  Formation gestion </label>
                    <label for=""><input type="radio" name="info_collec" id="">Soirée d'information sur la convention collective nationale du sport</label>
                    <label for=""><input type="radio" name="connaissance" id="">Actualisation des connaissances sur la convention collective nationale du sport et la responsabilité des dirigeants.</label>
                    <label for=""><input type="radio" name="compta" id="">Comptabilité</label>
                    <label for=""><input type="radio" name="partenariat" id="">Recherche de partenariat</label>
                </div>
                <div class="info">
                <label for="">  Formation informatique </label>
                    <label for=""><input type="radio" name="out1" id="">Outlook Niveau 1.</label>
                    <label for=""><input type="radio" name="" id="">Outlook Niveau 2.</label>
                    <label for=""><input type="radio" name="PP2" id="">Power point Niveau 2.</label>
                    <label for=""><input type="radio" name="photo1" id="">Photoshop Niveau 1</label>
                    <label for=""><input type="radio" name="photo2" id="">Photoshop Niveau 1</label>
                </div>
                <div class="dev">
                    <label for="">  Formation developpement durable </label>
                    <label for=""><input type="radio" name="eco" id="">Organiser une manifestation éco responsable</label>
                </div>
                <div class="secourisme">
                    <label for="">  Formation secourisme </label>
                    <label for=""><input type="radio" name="psc" id=""> Prévention et secours civique (PSC).</label>
                    <label for=""><input type="radio" name="premierSe" id="">Bonnes pratiques et premiers secours.</label>
                </div>
                <div class="Communication">
                    <label for="">  Formation Communication </label>
                    <label for=""><input type="radio" name="reu" id="">Conduite de réunion.</label>
                    <label for=""><input type="radio" name="presse" id="">Communiquer avec la presse</label>
                    <label for=""><input type="radio" name="etrangere" id="">Langues étrangères.</label>
                </div>
                
           </div>
            <div class="date-section">
                <label for="date">Date</label>
                <input type="date" name="date" id="date">
                <br>
                <label for="horaire">Horaire</label>
                <input type="time" name="horaire" id="horaire">
                <br>
                <label for="lieu">Lieu</label>
                <input type="text" name="lieu" id="lieu">
                <br>
                <label for="intervenant">Intervenant</label>
                <input type="text" name="intervenant" id="intervenant">
                <br>
                <label for="public">Public</label>
                <input type="text" name="public" id="public">
                <br>
                <label for="objectifs">Objectifs</label>
                <input type="text" name="objectifs" id="objectifs">
                <br>
                <label for="contenu">Contenu</label>
                <input type="text" name="contenu" id="contenu">
                <br>
                <label for="cout">Coût</label>
                <input type="number" name="cout" id="cout">
                <br>
                <label for="dateLimite">Date limite d'inscription</label>
                <input type="date" name="dateLimite" id="dateLimite">
            </div>
             <br>
            <input type="submit" value="Valider">
                   
        </form>
       
    </div>
</body>
</html>