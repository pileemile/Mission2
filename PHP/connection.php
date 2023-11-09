
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Connexion | Forma</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="boxImg">
               
                
            </div>
            <form class="boxForm" name="myForm" id="myForm" action="includes/login.php" method="post">
                <div class="input">
                    <label class="inputLabel" id="inputid">Identifiant</label>   
                    <input type="text" class="inputField" id="inputField" name="identifiant" required>
                    
                </div>
                <div class="input">
                    <label class="inputLabel" id="inputmdp">Mot de passe</label>
                    <input type="text" class="inputField" id="inputField" name="mdp" required>
                    
                </div>
                <div class="input">
                    <input type="checkbox" name="salarier" id="salarier">
                    <label class="inputcheckbox" id="inputSalarier">Salarier/Bénévoles</label>
                    <input type="checkbox" name="inter" id="inter">
                    <label  class="inputcheckbox" id="inputinter">Interlocuteur</label>
                </div>
                <div class="action">
                    <input type="submit" class="actionButton" value="connection">
                </div>
            </form>
            <div class="boxInfo">
                <p>Vous avez oublié votre code ? <a href="#">Contactez l'administrateur du site.</a></p>
            </div>
        </div>
    </div>


        
</body>
</html>