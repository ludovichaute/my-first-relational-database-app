<?php
    session_start ();

if ($_SESSION["type_user"] == "moderateur" or $_SESSION["type_user"] == "admin") {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=chrichrichrichri;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
} else {
        header("Location: ../controllers/logout.php");
}
    
?>