<?php 
    try
    {
        // On se connecte à MySQL
        $dbh = new PDO('mysql:host=localhost;dbname=chrichri;charset=utf8', 'root', '');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }   
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $updateFac = $dbh->prepare("UPDATE factures 
    SET num_facture = '12', `date_facture` = '2018-09-15', `montant` = '3', `objet` = 'kit ping dq', `personnes_idpersonnes` = '2', `societe_idsociete` = '3' WHERE `factures`.`idfactures` = 1;")
    
   // $updateFac->execute();

   
  
    
    
  //header('location: ../views/facture/facture_edit.php');
?>