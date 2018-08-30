
<?php

// Création du DSN
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=chrichri;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Requête 

$resultat = $bdd->query("SELECT users FROM chrichri");

//On prends dans la table celui qui a les coordonnes inserees 

$requete = $bdd->prepare("SELECT mdp, user FROM chrichri")
$requete->bindParam(":mdp", $mdp);
$requete->bindParam(":user", $username);

$user = $_POST["username"];
$pmdp = $_POST["pass"];
$stmt->execute();
$stmt->closeCursor();

    
//si ils existe > on le redirige vers la page 
//    
//si il existe pas > msg d'erreurs



