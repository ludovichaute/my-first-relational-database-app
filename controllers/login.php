
<?php

// Création du DSN
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=chrichrichrichri;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Requête 

session_start ();
$username = $_POST["username"];
$mdp = sha1($_POST["pass"]);
//   :user = la variable 
$requete = $bdd->prepare("SELECT mdp, user FROM users WHERE user = :user");
$requete->bindParam(":user", $username);
$requete->execute();
$rep = $requete->fetch();
if ($mdp === $rep[mdp]) {
   header("Location: ../views/accueil-page.php");
}else{
    echo "User ou mot de passe incorrect";
}
session_start ();


//$session = 
?>
