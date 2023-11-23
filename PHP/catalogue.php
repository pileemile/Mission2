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
        <label for="domaine">Choisir un domaine</label>
        <select name="domaine" id="domaine" onchange="submitForm()">
        <option value="*">--- Choisir un domaine ---</option>
            <option value="gestion" name="gestion">Gestion</option>
            <option value="info">informatique</option>
            <option value="DD">Developpement Durable</option>
            <option value="secour">Secourisme</option>
            <option value="Com">Communication</option>
        </select>
        
    
    <script>
  function submitForm() {
      document.getElementById("domaineForm").submit();
  }
</script>
<br>  
       <label for="">Choisir une formation</label>
            <select name="formation" id="formation">
            <option value="*">--- Choisir une formation ---</option>
        <?php     
            if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['domaine'])){
                $domaine = $_POST['domaine'];
                $_SESSION['domaine'] = $domaine; 
                switch ($domaine) {
                    case 'gestion':
                        echo '<option value="info">Soirée d\'information sur la convention collective nationale du sport</option>';
                        echo '<option value="info">Actualisation des connaissances sur la convention collective nationale du sport et la responsabilité des dirigeants.</option>';
                        echo '<option value="info">Comptabilité</option> ';
                        echo '<option value="info"> Recherche de partenariat</option>'; 
                        break;
                    case 'info':
                        echo '<option value="info"> Outlook Niveau 1</option>';
                        echo '<option value="info">Outlook Niveau 2</option>';
                        echo '<option value="info">Power point Niveau 2</option>';
                        echo '<option value="info">Photoshop Niveau 1 </option>';
                        echo '<option value="info">Photoshop Niveau 2 </option>';   
                        break;
        
                    case 'DD' : 
                        echo '<option value="info">Organiser une manifestation éco responsable</option>';
                        break;
                    case 'secour' :
                         echo '<option value="info">Prévention et secours civique (PSC)</option>';
                         echo '<option value="info">Bonnes pratiques et premiers secours</option>';   
                         break; 
                    case 'Com': 
                        echo '<option value="info">Conduite de réunion</option>';
                        echo '<option value="info">Communiquer avec la presse</option>';
                        echo '<option value="info">Langues étrangères</option>';   
                        break;
    }
}
    ?>         
            </select>
            <label for=""></label>
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

                    <br>
                    <input type="submit" value="Valider">
        </form>
       
    </div>
</body>
</html>