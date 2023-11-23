<?php
    // Définitions de constantes pour la connexion à MySQL
	$hote="localhost";
	$login="root";
	$mdp="";
	$nombd="mission2_ap";

    // Connection au serveur
	try {
        $connexion = new PDO("mysql:host=$hote;dbname=$nombd;charset=utf8",$login,$mdp);
        echo"ok";
    } catch ( Exception $e ) { 
        die ("\n Connexion à '$hote' impossible : ".$e->getMessage());
    }
?>