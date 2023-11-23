<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="stylesheet" href="catalogue.css">
</head>
<body>
    <h1>Creer une formation</h1>

    <div class="formation">
      
    
        <form  method="post" name="nomdomaine" onsubmit="return afficherTest()">

        <label for="">Choisir un domaine</label>
        <select name="domaine" id="domaine">
        <option value="*">--- Choisir un domaine ---</option>
            <option value="gestion">Gestion</option>
            <option value="info">informatique</option>
            <option value="DD">Developpement Durable</option>
            <option value="secour">Secourisme</option>
            <option value="Com">Communication</option>
        </select>
     
    </form>
        <br>
        <script>
    function afficherTest() {
        var selectedValue = document.getElementById("domaine").value;

        // Vérifier si l'option sélectionnée est différente de "*"
        if (selectedValue !== "*") {
            // Afficher "test" en PHP
            <?php echo 'test'; ?>;
        }

        // Empêcher le formulaire de se soumettre normalement
        return false;
    }
</script>
       
       
        
       <label for="">Choisir une formation</label>
                    <select name="formation" id="formation">
                        <option value="*">--- Choisir une formation ---</option>
                        <option value="info">Soirée dinformation sur la convention collective nationale du sport</option>
                        <option value="info">Actualisation des connaissances sur la convention collective nationale du sport et la responsabilité des dirigeants</option>
                        <option value="info">Outlook</option>
                        <option value="info">Power point</option>
                        <option value="info">Photoshop</option>
                        <option value="info">Organiser une manifestation éco responsable</option>
                        <option value="info">Prévention et secours civique (PSC)</option>
                        <option value="info">Bonnes pratiques et premiers secours</option>
                        <option value="info">Conduite de réunion</option>
                        <option value="info">Communiquer avec la presse</option>
                        <option value="info">Langues étrangères</option>
                    </select>
        
                    <label for="">Date</label>
                    <input type="date" name="date" id="date">
                    <br>
                    <label for="">Horaire</label>
                    <input type="time" name="horaire" id="horaire">
                    <br>
                    <label for="">Lieu</label>
                    <input type="text" name="lieu" id="lieu">
                    <br>
                    <label for="">Intervenant</label>
                    <input type="text" name="intervenant" id="intervenant">
                    <br>
                    <label for="">Public</label>
                    <input type="text" name="public" id="public">
                    <br>
                    <label for="">Objectifs</label>
                    <input type="text" name="objectifs" id="objectifs">
                    <br>
                    <label for="">Contenu</label>
                    <input type="text" name="contenu" id="contenu">
                    <br>
                    <label for="">Coût</label>
                    <input type="number" name="cout" id="cout">
                    <br>
                    <label for="">Date limite dinscription</label>
                    <input type="date" name="dateLimite" id="dateLimite">
       
    </div>
</body>
</html>