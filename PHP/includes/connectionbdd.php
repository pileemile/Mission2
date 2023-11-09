<?php
    //Constantes connexion BDD
    $login = "root";
    $password = "";

    //Connexion BDD
    try{
        $connexion= new PDO('mysql:host=localhost;dbname=mission2_ap', $login, $password);
        
        
    }catch(Exception $e){
        echo 'Connexion échouée <br>';
    }
?>